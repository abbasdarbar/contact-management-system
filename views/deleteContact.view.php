<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Contact</title>
    <link rel="stylesheet" href="../pico.min.css">
</head>
<body>
    <h1>Delete Contact</h1>

    <p>Are you sure you want to delete the following contact?</p>
    
    <p><strong>Name:</strong> <?= $contact['name']; ?></p>
    <p><strong>Email:</strong> <?= $contact['email']; ?></p>
    <p><strong>Phone:</strong> <?= $contact['phone']; ?></p>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <input type="submit" value="Yes, Delete">
        <a href="listContact.php">Cancel</a>
    </form>
</body>
</html>
