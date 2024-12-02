<div>
    <h2 class="text-lg font-semibold mb-4">Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($products as $product)
            <div class="bg-white p-4 shadow-md rounded cursor-pointer" wire:click="displayProductsDescription({{$product->id}})">
                <img src="{{ $product->image_url }}" alt="Espresso" class="w-full h-32 object-cover mb-2">
                <h3 class="font-semibold text-md mb-2">{{ $product->name }}</h3>
                <p class="text-gray-600 mb-2">{{ $product->price }} {{ config('app.currency') }}</p>
            </div>
        @endforeach
    </div>
</div>
