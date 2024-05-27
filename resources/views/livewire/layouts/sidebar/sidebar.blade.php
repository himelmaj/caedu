<aside class="w-1/6 flex-1 flex h-full flex-col overflow-y-auto border-r border-zinc-200
bg-white px-3 py-4 dark:border-zinc-700 dark:bg-zinc-900">

    <div class="mb-10 flex items-center  px-3 py-2 text-zinc-900 dark:text-white" wire:navigate href="/admin">
        <x-application-logo class="w-8 h-8 mr" />
        <span class="ml-3 text-2xl font-semibold">Caedu</span>
    </div>


    <ul class="flex flex-col w-full gap-2">
        @php
        $roles = [
        'admin' => $admin_links,
        'student' => $student_links,
        'teacher' => $teacher_links,
        ];
        @endphp

        @foreach ($roles as $role => $links)
        @if (auth()->user()->hasRole($role))
        @foreach ($links as $link)
        <livewire:layouts.sidebar.sidebar-link :url="$link['url']" :label="$link['label']" :icon="$link['icon']" />
        @endforeach
        @endif
        @endforeach
    </ul>



    <div class="mt-auto flex flex-col gap-2 bg-zinc-800 p-3 rounded-md">
        <div class="flex w-full justify-between">
            <h3 class="text-md font-semibold text-black h-5 dark:text-white">{{ auth()->user()->name }}</h3>
            <form action="{{ route('logout') }}" method="POST" class="" id="logout-form">
                <button type="submit" class="">
                    @svg('heroicon-c-power', 'h-5 w-5 text-black font-semibold dark:text-white
                    hover:dark:text-blue-500')
                </button>
                @csrf
            </form>
        </div>

        <div class="flex w-full justify-between">
            <span class="text-sm font-medium text-black dark:text-white">{{ auth()->user()->email }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                class="cursor-pointer text-white hover:text-blue-500" href="/user/profile" wire:navigate
                aria-roledescription="more menu" fill="none" stroke="currentColor" stroke-width="2"
                class="h-5 w-5 text-black dark:text-white" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
            </svg>
        </div>
</aside>