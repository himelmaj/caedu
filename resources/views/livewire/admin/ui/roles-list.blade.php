<div class="flex flex-col flex-1 gap-5 justify-between">
    <div class="grid grid-cols-4 gap-5">

        @foreach ($this->roles as $role)
        <div class="flex flex-col px-6 py-10 overflow-hidden bg-zinc-900 hover:bg-zinc-800  rounded-xl shadow-lg duration-300 group">
            <div class="flex justify-between">
                <h2 class="text-lg font-semibold dark:text-white">{{ $role->name }}</h2>

                <div class="flex gap-2">
                    @if (!auth()->user()->hasRole($role->name) && $role->name !== 'unassigned')
                        <livewire:admin.actions.delete-role :role="$role" :key="$role->id" />
                        <livewire:admin.actions.update-role :role="$role" :key="$role->id" />
                    @endif

                </div>

            </div>
        </div>
        @endforeach


    </div>

    <div class="my-3 dark:text-white">
        {{ $this->roles->links() }}
    </div>
</div>