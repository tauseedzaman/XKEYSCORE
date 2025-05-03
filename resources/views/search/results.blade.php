<x-app-layout>
    <x-slot name="header">
        <x-search-bar />
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto space-y-10">

        {{-- Accounts --}}
        @if ($accounts->count())
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Accounts <span class="text-sm text-gray-500">({{ $accounts->total() }})</span>
                    </h3>
                    {{ $accounts->withQueryString()->links() }}
                </div>

                <div class="overflow-x-auto border border-gray-200 dark:border-gray-700 rounded-md">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-medium">Username</th>
                                <th class="px-4 py-2 text-left text-sm font-medium">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer transition"
                                    onclick="window.location='{{ route('accounts.show', $account->id) }}'">
                                    <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $account->username }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ Str::limit($account->email, 40) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- Messages --}}
        @if ($messages->count())
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Messages <span class="text-sm text-gray-500">({{ $messages->total() }})</span>
                    </h3>
                    {{ $messages->withQueryString()->links() }}
                </div>

                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium">From</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Subject</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer transition"
                                onclick="window.location='{{ route('messages.show', $message->id) }}'">
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $message->from }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ Str::limit($message->subject, 50) }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $message->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        {{-- Locations --}}
        @if ($locations->count())
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Locations <span class="text-sm text-gray-500">({{ $locations->total() }})</span>
                    </h3>
                    {{ $locations->withQueryString()->links() }}
                </div>

                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium">City</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Country</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer transition"
                                onclick="window.location='{{ route('locations.show', $location->id) }}'">
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $location->city }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $location->country }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $location->ip_address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        {{-- Credentials --}}
        @if ($credentials->count())
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Credentials <span class="text-sm text-gray-500">({{ $credentials->total() }})</span>
                    </h3>
                    {{ $credentials->withQueryString()->links() }}
                </div>

                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium">Platform</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Username</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Last Used</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($credentials as $credential)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer transition"
                                onclick="window.location='{{ route('credentials.show', $credential->id) }}'">
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $credential->platform }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $credential->username }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-100">{{ $credential->last_used_at ? $credential->last_used_at->diffForHumans() : 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        {{-- If all are empty --}}
        @if (!$accounts->count() && !$messages->count() && !$locations->count() && !$credentials->count())
            <div class="text-center text-gray-600 dark:text-gray-400">No results found.</div>
        @endif
    </div>
</x-app-layout>
