<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductInfoCard extends Component
{
    public int $quantity = 1;

    public bool $showModal = false;

    public Product $product;

    public function incrementQuantity(): void
    {
        $this->quantity++;
    }

    public function decrementQuantity(): void
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    #[On('productDisplayed')]
    public function showProductInfo($productId): void
    {
        $this->product = Product::findOrFail($productId);
        // $this->product = Product::select( 'description' )
        // ->findOrFail( $productId );
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.product-info-card');
    }
}
