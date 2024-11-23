<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{

    public $categories;

    public function mount()
    {

        $this->categories = Category::orderBy('name')->get();

    }
    public function render()
    {
        return view('livewire.categories');
    }
}
