<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component {

    public $products;
    public $selectedCategoryId;

    public function mount() {
        $this->products = Product::all();
    }

    #[ On( 'categoryChanged' ) ]

    public function displayProducts( $categoryId ) {

        $this->selectedCategoryId = $categoryId;
        $this->products = Product::where( 'category_id', $categoryId )->get();
    }

    public function render() {
        return view( 'livewire.products' );
    }
}
