<?php

namespace App\Livewire\Admin\Ui;

use Livewire\Component;

class Search extends Component
{

    public $search = '';

    public function updateSearch()
    {
        $this->dispatch('search', search: $this->search);
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->dispatch('search', search: $this->search);
    }


    public function render()
    {
        return view('livewire.admin.ui.search');
    }
}
