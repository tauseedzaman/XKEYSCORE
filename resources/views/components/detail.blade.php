@props(['label', 'value'])

<div class="space-y-1">
    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $label }}</div>
    <div class="text-sm text-gray-800 dark:text-gray-200 font-medium">
        {{ $value ?? '--' }}
    </div>
</div>
