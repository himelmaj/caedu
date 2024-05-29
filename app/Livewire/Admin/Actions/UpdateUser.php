<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Models\User;
use App\Livewire\Forms\Admin\FormUser;

class UpdateUser extends Component
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

    public User $user;

    public FormUser $form;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->form->setUser($user);
    }

    public function updateUser(){
        $this->form->update();
        $this->closeModal();
        return redirect()->route('admin.users');
    }

    public function render()
    {
        return view('livewire.admin.actions.update-user');
    }
}
