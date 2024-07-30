<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Update</button>
    </form>
</body>

</html>