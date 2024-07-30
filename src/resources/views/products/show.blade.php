<!DOCTYPE html>
<html>

<head>
    <title>Show Product</title>
</head>

<body>
    <h1>Show Product</h1>
    <p>Name: {{ $product->name }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>Category: {{ $product->category->name }}</p>
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('products.index') }}">Back to List</a>
</body>

</html>