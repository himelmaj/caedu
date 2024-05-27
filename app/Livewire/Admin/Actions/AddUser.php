<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\CreateUser;

class AddUser extends Component
{
    public $modal = false;

    public $roles =  ['admin', 'teacher', 'student'];

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public CreateUser $form;

    public function save()
    {
        $this->form->store();
        $this->closeModal();
        
        return redirect()->route('admin.users');
    }

    public function render()
    {
        return view('livewire.admin.actions.add-user');
    }
}
