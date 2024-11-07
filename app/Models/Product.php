<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $fillable = [ 'name', 'description', 'price', 'image_path', 'quantity', 'status', 'category_id' ];
    //protected $guarded = [];

    public function category() {
        return $this->belongsTo( Category::class );
    }

    public function orderItem() {
        return $this->hasMany( OrderItem::class );
    }
}
