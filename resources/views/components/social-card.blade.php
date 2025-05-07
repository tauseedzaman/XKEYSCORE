@props([
    'platform',
    'username',
    'link',
    'metadata' => null
])

@php
    $icons = [
        'Facebook' => 'facebook',
        'Twitter' => 'twitter',
        'Instagram' => 'instagram',
        'LinkedIn' => 'linkedin',
        'Telegram' => 'send',
        'Discord' => 'message-circle',
        'Reddit' => 'reddit',
        'YouTube' => 'youtube',
        'GitHub' => 'github',
    ];
    $icon = $icons[$platform] ?? 'globe';
@endphp

<div class="flex items-center space-x-4 p-4 border rounded-xl shadow hover:shadow-md transition bg-white dark:bg-gray-900">
    <div class="text-blue-600 dark:text-blue-400">
        <x-lucide-icon :name="$icon" class="w-6 h-6" />
    </div>
    <div class="flex-1">
        <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $platform }}</div>
        <a href="{{ $link }}" target="_blank" class="text-blue-500 hover:underline text-sm">{{ '@' . $username }}</a>
    </div>
</div>
