<?php

function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=contacts', 'root', 'admin123');
        return $pdo;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
    }
}
