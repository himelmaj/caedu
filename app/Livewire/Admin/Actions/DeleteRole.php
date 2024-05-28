<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\FormRole;

class DeleteRole extends Component
{
    public $modal = false;

    public $id;

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public FormRole $role;

    public function deleteRole($id)
    {
        $this->role->delete($id);
        
        $this->closeModal();
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.actions.delete-role');
    }
}
