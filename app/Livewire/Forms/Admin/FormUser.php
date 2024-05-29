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

    #[Validate('required|email|unique:users,email,{this->user->id}')]
    public string $email = '';

    #[Validate('required')]
    public string $role = 'unassigned';

    #[Validate('nullable|confirmed')]
    public string $password = '';

    #[Validate('nullable')]
    public string $password_confirmation = '';

    public function setUser(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->getRoleNames()[0];
        $this->user = $user;
    }

    public function store()
    {
        $this->validate();

        if ($this->password !== $this->password_confirmation) {
            $this->addError('password', 'Passwords do not match.');
            return;
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole($this->role);
        $this->reset();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'role' => 'required',
            'password' => 'nullable|confirmed',
            'password_confirmation' => 'nullable',
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        if (!empty($this->password)) {
            if ($this->password !== $this->password_confirmation) {
                $this->addError('password', 'Passwords do not match.');
                return;
            }
            $data['password'] = Hash::make($this->password);
        }

        $this->user->update($data);
        $this->user->syncRoles([$this->role]);

        $this->reset();
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}
