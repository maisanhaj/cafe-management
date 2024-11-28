<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductInfoCard extends Component {

    public $quantity = 1;
    public $showModal = false;

    public function incrementQuantity() {
        $this->quantity++;
    }

    public function decrementQuantity() {
        if ( $this->quantity > 1 ) {
            $this->quantity--;
        }
    }
    #[ On( 'productDisplayed' ) ]

    public function showProductInfo( $productId ) {
        $this->product = Product::findOrFail( $productId );
        // $this->product = Product::select( 'description' )
        // ->findOrFail( $productId );
        $this->showModal = true;
    }

    public function closeModal() {
        $this->showModal = false;

    }

    public function render() {
        return view( 'livewire.product-info-card' );
    }
}
