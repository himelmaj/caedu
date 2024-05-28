<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\FormUser;
use App\Models\User;

class DeleteUser extends Component
{

    public $modal = false;

    public User $user;

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public FormUser $form;

    public function delete(User $user)
    {
        $this->form->destroy($user);
        $this->closeModal();
        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.admin.actions.delete-user');
    }
}
