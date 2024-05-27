<div class="py-2 flex flex-row items-center gap-2 ">
    <label for="table-search" class="sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="text" id="table-search" required wire:model.live="search" wire:keydown='updateSearch'
            class="block pt-2 ps-10 text-sm text-zinc-900 border border-zinc-300 rounded-lg w-80 bg-zinc-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Search for items">
    </div>
</div>