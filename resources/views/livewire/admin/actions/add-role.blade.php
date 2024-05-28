
<div>
    <x-button-create-action wire:click="openModal" />

    <x-dialog-modal wire:model="modal">
            <x-slot name="title">
                Create Role
            </x-slot>

            <x-slot name="content">

                <form wire:submit="save" class="flex flex-col gap-2">
    
                    <x-input id="name" class="block w-full" type="text" wire:model='form.name' required
                        placeholder="Name" />
                    <x-input-error for="form.name" class="mt-2" />
                    
    
                    <x-button type="submit">
                        Create
                    </x-button>
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