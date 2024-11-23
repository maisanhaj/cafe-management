<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Enums\OrderStatus;
use Illuminate\Support\Facades\Auth;

class CashierDashboard extends Component {
    public $order;

    public function mount() {
        $this->retrieveOrCreateOrder();
    }

    public function retrieveOrCreateOrder() {

        $this->order = Order::firstOrCreate(
            [ 'status' => OrderStatus::Pending, 'user_id' => Auth::id() ],
        );
    }

    public function render() {
        return view( 'livewire.cashier-dashboard' );
    }
}
