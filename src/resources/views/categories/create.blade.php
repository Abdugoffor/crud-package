<!DOCTYPE html>
<html>

<head>
    <title>Create Category</title>
</head>

<body>
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</body>

</html>