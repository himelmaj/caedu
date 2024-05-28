<?php

namespace App\Livewire\Admin\Actions;

use Livewire\Component;
use App\Livewire\Forms\Admin\FormRole;

class AddRole extends Component
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

    public FormRole $form;

    public function save()
    {
        $this->form->store();
        $this->closeModal();

        return redirect()->route('admin.roles');
    }

    public function render()
    {
        return view('livewire.admin.actions.add-role');
    }
}
