<?php

namespace App\Livewire\Admin\Ui;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;

use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;

class UsersTable extends Component
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
    public function users()
    {
        return User::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->paginate(10);
    }



    public function render()
    {
        return view('livewire.admin.ui.users-table');
    }
}
