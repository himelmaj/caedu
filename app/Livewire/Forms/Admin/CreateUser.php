<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Form
{
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
    }
}