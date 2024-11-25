<div class="w-1/6 bg-white shadow-md p-4">
    <h2 class="text-lg font-semibold mb-4">Categories</h2>
    <ul>
        @foreach($categories as $category)
            <li class="mb-2 p-2 hover:bg-gray-200 rounded cursor-pointer">
                <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="w-full h-20 object-cover mb-2">
                {{ $category->name }}
            </li>
        @endforeach
    </ul>
</div>
