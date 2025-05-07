<div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow border border-gray-100 dark:border-gray-800">
    <div class="flex justify-between items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
        <span class="font-semibold text-gray-700 dark:text-gray-300">{{ $credential->site }}</span>
        @if($credential->leaked)
            <span class="text-red-600 font-semibold">Leaked</span>
        @endif
    </div>
    <div class="text-sm text-gray-700 dark:text-gray-200 space-y-1">
        <div><strong>Email:</strong> {{ $credential->email }}</div>
        <div><strong>Username:</strong> {{ $credential->username }}</div>
        <div><strong>Password:</strong> {{ $credential->password }}</div>
        <div><strong>Phone:</strong> {{ $credential->phone }}</div>
        {{-- @php $meta = json_decode($credential->metadata ?? '{}', true); @endphp
        @if(!empty($meta['last_seen']))
            <div><strong>Last Seen:</strong> {{ $meta['last_seen'] }}</div>
        @endif
        @if(!empty($meta['notes']))
            <div><strong>Notes:</strong> {{ $meta['notes'] }}</div>
        @endif --}}
    </
