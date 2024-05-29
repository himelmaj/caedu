<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Role;
use App\Models\User;

class FormRole extends Form
{
    public ?Role $role;

    #[Validate('required|max:255|unique:roles,name')]
    public string $name = '';

    public function setRole(Role $role)
    {
        $this->name = $role->name;
        $this->role = $role;
    }

    public function store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
        ]);

        $this->reset();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|max:255|unique:roles,name,' . $this->role->id,
        ]);

        $this->role->update([
            'name' => $this->name,
        ]);

        $this->reset();
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
