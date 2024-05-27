@props(['name' => '', 'value' => '', 'increase' => null, 'decrease' => null, 'icon' => null])


<div
    class="flex flex-col px-6 py-10 overflow-hidden bg-zinc-900 hover:bg-zinc-800  rounded-xl shadow-lg duration-300 group">
    <div class="flex flex-row justify-between items-center">
        <div class="px-4 py-4 bg-zinc-300  rounded-xl bg-opacity-30">
            @svg($icon, 'h-6 w-6')

        </div>
        <div class="inline-flex text-sm text-zinc-600 sm:text-base">
            @if ($increase)
            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                +{{ $increase }}%
            </span>
            @endif

            @if ($decrease)
            <span class="inline-block px-2 py-px ml-2 text-xs text-red-500 bg-red-100 rounded-md">
                -{{ $decrease }}%
            </span>
            @endif
        </div>
    </div>
    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-zinc-300 mt-12">
        {{ $value }}
    </h1>
    <div class="flex flex-row justify-between text-zinc-400">
        <p>
            {{ $name }}
        </p>

    </div>
</div>