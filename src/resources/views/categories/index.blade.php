<!DOCTYPE html>
<html>

<head>
    <title>Categories</title>
</head>

<body>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Create Category</a>
    <ul>
        @foreach ($categories as $category)
        <li>{{ $category->name }}</li>
        @endforeach
    </ul>
</body>

</html>