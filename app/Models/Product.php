<?php

namespace App\Models;

use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model {
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'price', 'image_path', 'quantity', 'status', 'category_id' ];

    protected function casts(): array {
        return [
            'status' => ProductStatus::class,
        ];
    }
    public function category() {
        return $this->belongsTo( Category::class );
    }

    public function orderItem() {
        return $this->hasMany( OrderItem::class );
    }
}
