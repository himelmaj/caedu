<?php

namespace App\Livewire\Layouts\Sidebar;

use Livewire\Component;
use Livewire\Attributes\Computed;

class Sidebar extends Component
{

    #[Computed]
    public $admin_links = [
        ['label' => 'Home', 'url' => '/admin', 'icon' => 'heroicon-s-home'],
        ['label' => 'Users', 'url' => '/admin/users', 'icon' => 'heroicon-s-users'],
        ['label' => 'Roles', 'url' => '/admin/roles', 'icon' => 'heroicon-s-user-group']
    ];

    #[Computed]
    public $teacher_links = [
        ['label' => 'Home', 'url' => '/teacher', 'icon' => 'heroicon-s-home'],
    ];

    #[Computed]
    public $student_links = [
        ['label' => 'Home', 'url' => '/student', 'icon' => 'heroicon-s-home'],
        ['label' => 'Calendar', 'url' => '/student/calendar', 'icon' => 'heroicon-s-calendar']
    ];

    public function render()
    {
        return view('livewire.layouts.sidebar.sidebar');
    }
}
