<!DOCTYPE html>
<html>

<head>
    <title>Edit Category</title>
</head>

<body>
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Update</button>
    </form>
</body>

</html>