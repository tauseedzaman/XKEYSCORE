@props([
    'title' => '',
    'description' => null
])

<section class="mb-8">
    <div class="mb-4">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
        @if ($description)
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $description }}</p>
        @endif
    </div>
    <div {{ $attributes->merge(['class' => 'grid gap-4 sm:grid-cols-2 lg:grid-cols-3']) }}>
        {{ $slot }}
    </div>
</section>
