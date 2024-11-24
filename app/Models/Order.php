<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model {
    use HasFactory;
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
