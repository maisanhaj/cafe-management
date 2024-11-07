<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model {

    protected $fillable = [ 'name', 'unit_price', 'total', 'quantity', 'product_id', 'order_id' ];
    //protected $guarded = [];

    public function product() {
        return $this->belongsTo( Product::class );
    }

    public function order() {
        return $this->belongsTo( Order::class );
    }

    public function setTotalAttribute( $value ) {
        $this->attributes[ 'total' ] = $this->attributes[ 'unit_price' ] * $this->attributes[ 'quantity' ];
    }

    // protected function total(): Attribute {
    //     return Attribute::make(

    //         set: fn ( string $value ) => strtolower( $value ),
    // );
    // }

}
