<?php 

include 'models/connectToDB.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $pdo = connectToDatabase();

    $query = "INSERT INTO untitled_table_1 (name, email, phone) VALUES (:name, :email, :phone)";
    $statement = $pdo->prepare($query);

    if ($statement->execute([':name' => $name, ':email' => $email, ':phone' => $phone])) {
        header('Location: listContact.php');
        exit;
    } else {
        echo "Failed to add contact.";
    }
}

include 'views/addContact.view.php';
