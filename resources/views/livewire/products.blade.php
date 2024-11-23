<div>
    <h2>All Products</h2>

    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <strong>{{ $product->name }}</strong> - {{ $product->description }} - ${{ $product->price }}
                </li>
            @endforeach
        </ul>
    @endif
</div>

