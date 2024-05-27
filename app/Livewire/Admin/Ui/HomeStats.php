<?php

namespace App\Livewire\Admin\Ui;

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\User;
use Spatie\Permission\Models\Role;

class HomeStats extends Component
{
    public $totalUsers;

    public $totalRoles;

    public $totalUsersWithRoleAdmin;

    public $totalUsersWithRolesTeacher;

    public $totalUsersWithRolesStudent;


    #[Computed()]
    public $data;


    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalRoles = Role::count();

        $this->totalAdmins = User::with('roles')->get()->filter(
            fn($user) => $user->roles->where('name', 'admin')->toArray()
        )->count();

        $this->totalTeachers = User::with('roles')->get()->filter(
            fn($user) => $user->roles->where('name', 'teacher')->toArray()
        )->count();

        $this->totalStudents = User::with('roles')->get()->filter(
            fn($user) => $user->roles->where('name', 'student')->toArray()
        )->count();

        $this->data = [
            ['name' => 'Total Users', 'value' => $this->totalUsers, 'icon' => 'heroicon-s-user-group', 'increase' => null, 'decrease' => null],
            ['name' => 'Total Roles', 'value' => $this->totalRoles, 'icon' => 'heroicon-s-finger-print', 'increase' => null, 'decrease' => null],
            ['name' => 'Total Admins', 'value' => $this->totalAdmins, 'icon' => 'gmdi-admin-panel-settings', 'increase' => null, 'decrease' => null],
            ['name' => 'Total Teacher', 'value' => $this->totalTeachers, 'icon' => 'heroicon-s-academic-cap', 'increase' => null, 'decrease' => null],
            ['name' => 'Total Student', 'value' => $this->totalStudents, 'icon' => 'heroicon-s-user', 'increase' => null, 'decrease' => null],
        ];

    }


    public function render()
    {
        return view('livewire.admin.ui.home-stats');
    }
}
