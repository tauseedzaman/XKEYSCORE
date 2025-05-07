<div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow border border-gray-100 dark:border-gray-800">
    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
        <span>{{ $activity->category }}: {{ $activity->type }}</span>
        <span>{{ $activity->occurred_at->format('M d, Y H:i') }}</span>
    </div>
    <p class="mt-2 text-gray-700 dark:text-gray-200">{{ $activity->description }}</p>
    <div class="text-xs text-gray-400 mt-2">
        <span>{{ $activity->ip_address }} · {{ $activity->device }} · {{ $activity->location }}</span>
    </div>
</div>
