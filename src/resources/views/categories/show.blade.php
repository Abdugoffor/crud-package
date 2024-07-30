<!DOCTYPE html>
<html>

<head>
    <title>Show Category</title>
</head>

<body>
    <h1>Show Category</h1>
    <p>Name: {{ $category->name }}</p>
    <a href="{{ route('categories.edit', $category) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('categories.index') }}">Back to List</a>
</body>

</html>