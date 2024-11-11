<?php
//for laravel test
use Tests\TestCase;
use App\Models\OrderItem;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderItemTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function set_total_attribute_for_order_items()
    {
        $order_item = OrderItem::factory()->make([
            'unit_price' => 50,
            'quantity' => 3,
            'total' => null,
        ]);
       
        $this->assertEquals(
            150,
            $order_item->total,
            'the order item mutator for total is not running correctly!'
        );
    }
}

