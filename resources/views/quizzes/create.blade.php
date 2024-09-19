<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create quizz</title>
</head>
<body>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required><br>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>