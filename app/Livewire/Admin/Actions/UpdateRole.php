<?php

namespace App\Livewire\Admin\Actions;

use App\Livewire\Forms\Admin\FormRole;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class UpdateRole extends Component
{
    public $modal = false;

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public Role $role;

    public FormRole $form;

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->form->setRole($role);
    }

    public function updateRole(){

        $this->form->update();
        $this->closeModal();
        return redirect()->route('admin.roles');
    }


    public function render()
    {
        return view('livewire.admin.actions.update-role');
    }
}
