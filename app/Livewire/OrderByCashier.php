<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OrderByCashier extends Component
{

    public $order;

    public function mount()
    {
        $this->retrieveOrCreateOrder();
    }

    public function retrieveOrCreateOrder()
    {

        $this->order = Order::firstOrCreate(
            ['status' => 'pending', 'user_id' => Auth::id()],
            ['total' => 0] 
        );
    }
    public function render()
    {
        return view('livewire.order-by-cashier', ['order' => $this->order]);
    }
}
