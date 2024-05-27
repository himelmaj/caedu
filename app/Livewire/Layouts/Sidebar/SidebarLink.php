<?php

namespace App\Livewire\Layouts\Sidebar;

use Livewire\Component;
use Livewire\Attributes\Computed;


class SidebarLink extends Component
{



    #[Computed()]
    public $label;

    #[Computed()]
    public $url;

    #[Computed()]
    public $icon;

    public function render()
    {
        return view('livewire.layouts.sidebar.sidebar-link');
    }
}
