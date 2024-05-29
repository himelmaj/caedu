<li>

    @if (str_contains($url, 'calendar'))
    <a href="{{ $url }}"
        class="flex items-center px-3 py-2 text-zinc-900 dark:text-white border-b dark:border-zinc-700 hover:dark:border-blue-500">
        @svg($icon, 'w-5 h-5')
        <span class="ml-3 flex-1 whitespace-nowrap">
            {{ $label }}
        </span>
    </a>
    @else
    <a href="{{ $url }}" wire:navigate.hover
        class="flex items-center px-3 py-2 text-zinc-900 dark:text-white border-b dark:border-zinc-700 hover:dark:border-blue-500">
        @svg($icon, 'w-5 h-5')
        <span class="ml-3 flex-1 whitespace-nowrap">
            {{ $label }}
        </span>
    </a>

    @endif
</li>