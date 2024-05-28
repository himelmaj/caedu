<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FormUser extends Form
{
    public ?User $user;

    #[Validate('required|max:255')]
    public string $name = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required')]
    public string $role = 'student';

    #[Validate('required|confirmed')]
    public string $password = '';

    #[Validate('required')]
    public string $password_confirmation = '';

    public function setUser(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->getRoleNames()[0];
    }

    public function store()
    {
        $this->validate();

        if ($this->password !== $this->password_confirmation) {
            $this->addError('password', 'Passwords do not match.');
            return;
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ])->assignRole($this->role);

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        if ($this->password !== $this->password_confirmation) {
            $this->addError('password', 'Passwords do not match.');
            return;
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->user->assignRole($this->role);

        $this->reset();
    }

    public function destroy(User $user)
    {
        $user->delete();
    }

}