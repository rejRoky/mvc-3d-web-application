<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="/home/edit/<?php echo $data['item']['id']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $data['item']['name']; ?>">
        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $data['item']['description']; ?></textarea>
        <button type="submit">Update</button>
    </form>
    <a href="/">Back to Items</a>
</body>
</html>
