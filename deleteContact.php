<?php

include 'models/connectToDB.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pdo = connectToDatabase();
    $query = "DELETE FROM untitled_table_1 WHERE id = :id";
    $statement = $pdo->prepare($query);

    if ($statement->execute([':id' => $id])) {
        header('Location: listContact.php');
        exit;
    } else {
        echo "Failed to delete contact.";
    }
}

include 'views/deleteContact.view.php';
