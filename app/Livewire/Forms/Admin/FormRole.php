<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Role;
use App\Models\User;


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

    public function destroy(Role $role)
    {

        $users = User::with('roles')->whereHas('roles', function($query) use ($role) {
            $query->where('name', $role->name);
        })->get();
    
        foreach ($users as $user) {
            $user->removeRole($role);
            $user->assignRole('unassigned');
        }
    
        $role->delete();
    
        $this->reset();
        
    }


}
