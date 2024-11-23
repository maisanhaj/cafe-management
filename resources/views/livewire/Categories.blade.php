<div>
    <h2>Categories</h2>

    @if($categories->isEmpty())
        <p>No categories found.</p>
    @else
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    @endif
</div>
