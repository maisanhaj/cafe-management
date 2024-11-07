<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['status_order','total','user_id'];
    protected $guarded = [];

    public function order_item(){

        return $this->hasMany(Orderitem::class);
    }
    public function user() {
        return $this->belongsTo( User::class );
    }
}
