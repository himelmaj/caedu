<x-layouts.app>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col flex-1 gap-5">
        <section>
            <livewire:admin.ui.header-roles />
        </section>
    
        <section>
            <livewire:admin.ui.search />
        </section>

        <section class="flex flex-col flex-1 gap-5 justify-between">
            <livewire:admin.ui.roles-list />
        </section>
        
    </div>
</x-layouts.app>