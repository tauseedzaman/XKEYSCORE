<div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow border border-gray-100 dark:border-gray-800">
    <div class="text-sm text-gray-700 dark:text-gray-200 space-y-1">
        <div><strong>City:</strong> {{ $location->city }}, {{ $location->region }}</div>
        <div><strong>Country:</strong> {{ $location->country }}</div>
        <div><strong>IP:</strong> {{ $location->ip_address }}</div>
        <div><strong>Device:</strong> {{ $location->device }}</div>
        <div><strong>Timezone:</strong> {{ $location->timezone }}</div>
        <div><strong>ISP:</strong> {{ $location->isp }} / {{ $location->organization }}</div>
        <div><strong>Coordinates:</strong> {{ $location->latitude }}, {{ $location->longitude }}</div>
    </div>
</div>
