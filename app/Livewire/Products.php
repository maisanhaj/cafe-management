<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;

class Products extends Component {

    public $products;
    public $selectedCategoryId;

    public function mount() {
        $this->products = collect();
    //    $firstCategory = Category::orderBy('name')->first();
    //    $this->displayProducts($firstCategory->id);
    }

    #[ On( 'categoryChanged' ) ]

    public function displayProducts( $categoryId ) {

        $this->selectedCategoryId = $categoryId;
        $this->products = Product::where( 'category_id', $categoryId )->get();
    }

    //this function to display product info
    public function displayProductsDescription($productId){
        $this->dispatch( 'productDisplayed', productId: $productId );
    }

    public function render() {
        return view( 'livewire.products' );
    }
}
