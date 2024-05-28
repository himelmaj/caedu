<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\FormRole;
use Spatie\Permission\Models\Role;

class DeleteRole extends Component
{
    public $modal = false;

    public Role $role;

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public FormRole $form;

    public function delete(Role $role)
    {
        $this->form->destroy($role);
        $this->closeModal();
        return redirect()->route('admin.roles');
    }

    public function render()
    {
        return view('livewire.admin.actions.delete-role');
    }
}
