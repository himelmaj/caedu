<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\FormUser;

class DeleteUser extends Component
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

    public FormUser $form;

    public function deleteUser($id)
    {
        $this->form->delete($id);
        return redirect()->route('admin.users');
    }


    public function render()
    {
        return view('livewire.admin.actions.delete-user');
    }
}
