<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\OrderStatus;

class Order extends Model {
    protected $fillable = [ 'status', 'total', 'user_id' ];

    protected function casts(): array {
        return [
            'status' => OrderStatus::class,
        ];
    }

    public function orderItem() {

        return $this->hasMany( Orderitem::class );
    }

    public function user() {
        return $this->belongsTo( User::class );
    }


}
