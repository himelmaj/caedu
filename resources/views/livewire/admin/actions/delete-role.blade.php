
<div>
    <x-button-delete-action wire:click="openModal" />

    <x-dialog-modal wire:model="modal">
            <x-slot name="title">
                Delete Role
            </x-slot>

            <x-slot name="content">

                <form wire:submit="delete({{$role}})" class="flex flex-col gap-4">
    
                    <p class="text-sm text-zinc-600 dark:text-zinc-400">
                        Are you sure you want to delete this role? This action is irreversible.
                    </p>
    
                    <x-danger-button type="submit" wire:loading.attr="disabled">
                        Delete
                    </x-danger-button>
                </form>

                <x-slot name="footer">
                    <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                        Nevermind
                    </x-secondary-button>
                
                </x-slot>

            </x-slot>

        </form>
    </x-dialog-modal>
</div>