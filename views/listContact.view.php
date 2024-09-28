<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="../pico.min.css">
</head>
<body>
    <h1>Contact List</h1>
    
    <a href="addContact.php">Add New Contact</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) { ?>
            <tr>
                <td><?= $contact['name']; ?></td>
                <td><?= $contact['email']; ?></td>
                <td><?= $contact['phone']; ?></td>
                <td>
                    <a href="deleteContact.php?id=<?= $contact['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
