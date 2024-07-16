<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book Details</title>
</head>
<body>
    <h2>Edit Book Details</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">User Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>

        <label for="book_name">Book Name:</label><br>
        <input type="text" id="book_name" name="book_name" value="{{ $book->book_name }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
