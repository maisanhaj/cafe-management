<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component {

    public $categories;
    public $selectedCategoryId;

    public function mount() {

        $this->categories = Category::orderBy( 'name' )->get();

    }

    public function handleComponentIntialize() {
        $this->setActiveCategory( $this->categories->first()->id );
    }

    public function setActiveCategory( $categoryId ) {
        $this->selectedCategoryId = $categoryId ;
        $this->dispatch( 'categoryChanged', categoryId: $categoryId );

    }

    public function render() {
        return view( 'livewire.categories' );
    }
}
