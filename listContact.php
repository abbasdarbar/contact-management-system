<?php

include 'models/connectToDB.php';

try {
    $pdo = connectToDatabase();

    $query = 'SELECT * FROM untitled_table_1';
    $statement = $pdo->prepare($query);
    $statement->execute();

    $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit;
}

include 'views/listContact.view.php';
