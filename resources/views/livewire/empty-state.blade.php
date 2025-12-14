<div class="text-center py-12">
    @if($icon)
        <div class="mx-auto w-12 h-12 text-gray-400 mb-4">{!! $icon !!}</div>
    @else
        <svg class="mx-auto w-12 h-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
        </svg>
    @endif

    <h3 class="text-lg font-medium text-gray-900 mb-1">{{ $title }}</h3>

    @if($description)
        <p class="text-sm text-gray-500 mb-4">{{ $description }}</p>
    @endif

    @if($actionLabel)
        <a href="{{ $actionUrl ?? '#' }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
            {{ $actionLabel }}
        </a>
    @endif

    {{ $slot }}
</div>
