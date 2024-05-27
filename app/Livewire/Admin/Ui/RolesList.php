<?php

namespace App\Livewire\Admin\Ui;

use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Role;


use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;

class RolesList extends Component
{
    use WithPagination; 

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }


    #[Computed()]
    public function roles()
    {
        return Role::where('name', 'like', '%'.$this->search.'%')
            ->paginate(32);
    }


    public function render()
    {
        return view('livewire.admin.ui.roles-list');
    }
}
