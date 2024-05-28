<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Role;


class FormRole extends Form
{
    #[Validate('required|max:255|unique:roles')]
    public string $name = '';

    public function store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
        ]);
    }

    public function updated($name, $value)
    {
        $this->validateOnly($name);

        Role::update(
            [
                'name' => $this->name,
            ],
            [
                'name' => $this->name,
            
            ]
        );
        
    }

    public function delete($id)
    {

        $role = Role::findOrFail($id);
        $role->delete();
        $this->reset();
    }


}