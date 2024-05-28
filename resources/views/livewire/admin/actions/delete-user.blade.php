
<div>
    <x-button-delete-action wire:click="openModal" />

    <x-dialog-modal wire:model="modal">
            <x-slot name="title">
                Delete User
            </x-slot>

            <x-slot name="content">

                <form wire:submit="deleteUser({{$id}})" class="flex flex-col gap-4">
    
                    <p class="text-sm text-zinc-600 dark:text-zinc-400">
                        Are you sure you want to delete this user?
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