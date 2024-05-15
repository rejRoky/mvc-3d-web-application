<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Model</title>
</head>
<body>
    <h1>Create Model</h1>
    <form action="/home/create" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Create</button>
    </form>
    <a href="/">Back to Models</a>
</body>
</html>
