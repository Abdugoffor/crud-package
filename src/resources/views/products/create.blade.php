<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">
            @error('price')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</body>

</html>