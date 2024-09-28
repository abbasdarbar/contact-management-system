<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <link rel="stylesheet" href="../pico.min.css">
</head>
<body>
    <h1>Add Contact</h1>
    <form method="POST" action="addContact.php">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br>
        <input type="submit" value="Add Contact">
    </form>
</body>
</html>
