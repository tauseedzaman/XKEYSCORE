<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 px-6">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
            <div class="flex items-center gap-6">
                <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-700"></div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $account->username }}</h1>
                    <p class="text-gray-500 dark:text-gray-400">{{ $account->email }}</p>
                    <p class="text-sm text-gray-400 dark:text-gray-500">Joined: {{ $account->created_at->format('M d, Y') }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <x-detail label="Phone" :value="$account->phone" />
                <x-detail label="Location" :value="$account->location" />
                <x-detail label="Occupation" :value="$account->occupation" />
                <x-detail label="Income Range" :value="$account->income_range" />
                <x-detail label="Marital Status" :value="$account->marital_status" />
                <x-detail label="Education" :value="$account->education" />
                <x-detail label="Website" :value="$account->website" />
            </div>

            @if ($account->bio)
            <div class="mt-6">
                <h3 class="font-semibold text-gray-900 dark:text-white">Bio</h3>
                <p class="text-gray-700 dark:text-gray-300 mt-2">{{ $account->bio }}</p>
            </div>
            @endif
        </div>

        <div class="mt-10 grid grid-cols-1 gap-6">
            <x-card-section title="Messages" :items="$account->messages" empty="No messages found">
                @foreach ($account->messages as $message)
                <x-message-card :message="$message" />
                @endforeach
            </x-card-section>

            <x-card-section title="Credentials" :items="$account->credentials" empty="No credentials found">
                @foreach ($account->credentials as $credential)
                <x-credential-card :credential="$credential" />
                @endforeach
            </x-card-section>

            <x-card-section title="Activities" :items="$account->activities" empty="No activities found">
                @foreach ($account->activities as $activity)
                <x-activity-card :activity="$activity" />
                @endforeach
            </x-card-section>

            <x-card-section title="Locations" :items="$account->locations" empty="No locations found">
                @foreach ($account->locations as $location)
                <x-location-card :location="$location" />
                @endforeach
            </x-card-section>

            <x-card-section title="Purchases" :items="$account->purchases" empty="No purchases found">
                @foreach ($account->purchases as $purchase)
                <x-purchase-card :purchase="$purchase" />
                @endforeach
            </x-card-section>

            <x-card-section title="Socials" :items="$account->socials" empty="No social profiles found">
                @foreach ($account->socials as $social)
                <x-social-card :social="$social" />
                @endforeach
            </x-card-section>
        </div>
    </div>
</x-app-layout>
