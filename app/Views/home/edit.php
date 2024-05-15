<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Model</title>
</head>
<body>
    <h1>Edit Model</h1>
    <form action="/home/edit/<?php echo $data['model']['id']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $data['model']['name']; ?>">
        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $data['model']['description']; ?></textarea>
        <button type="submit">Update</button>
    </form>
    <a href="/">Back to Models</a>
</body>
</html>
