<div>
    <x-button-edit-action wire:click="openModal" />

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">
            Update User
        </x-slot>

        <x-slot name="content">
            
            <form wire:submit="updateUser" class="flex flex-col gap-2">
                <x-input id="name" class="block w-full" type="text" wire:model.blur='form.name' required placeholder="Name" />
                <x-input-error for="form.name" class="mt-2" />
                <x-input id="email" class="block w-full" type="email" wire:model.blur='form.email' required placeholder="Email" />
                <x-input-error for="form.email" class="mt-2" />
                <x-input id="password" class="block w-full" type="password" wire:model.blur='form.password' placeholder="Password" />
                <x-input-error for="form.password" class="mt-2" />
                <x-input id="password_confirmation" class="block w-full" type="password" wire:model.blur="form.password_confirmation" placeholder="Confirm Password" />
                <x-input-error for="form.password_confirmation" class="mt-2" />

                <select id="role" class="block w-full bg-zinc-900 rounded-md border-zinc-700 text-zinc-300" wire:model="form.role">
                    @foreach (Spatie\Permission\Models\Role::all()->pluck('name') as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                    @endforeach
                </select>

                <x-button type="submit">
                    Update
                </x-button>
            </form>

            <x-slot name="footer">
                <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    Nevermind
                </x-secondary-button>
            </x-slot>
        </x-slot>
    </x-dialog-modal>
</div>
