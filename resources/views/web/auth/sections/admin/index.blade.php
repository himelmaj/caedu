<x-layouts.app>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <header class="flex h-20 bg-black text-white">
            <h1 class="text-2xl font-bold">
                Welcome again, {{ auth()->user()->name }}!
            </h1>
        </header>

        <section>
            <livewire:admin.ui.home-stats />
        </section>
    </div>
</x-layouts.app>