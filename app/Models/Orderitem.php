<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model {
    use HasFactory;

    protected $fillable = [ 'name', 'unit_price', 'total', 'quantity', 'product_id', 'order_id' ];

    public function product() {
        return $this->belongsTo( Product::class );
    }

    public function order() {
        return $this->belongsTo( Order::class );
    }

    public function setTotalAttribute( $value ) {
        $this->attributes[ 'total' ] = $this->attributes[ 'unit_price' ] * $this->attributes[ 'quantity' ];
    }

}

