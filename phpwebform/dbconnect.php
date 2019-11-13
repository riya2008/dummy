<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $sql= "CREATE DATABASE dummydb";
    $conn->exec($sql);
    echo "Database created Succesfully";
    // $sql="Drop DATABASE dummydb";
    // $conn-> exec($sql);
    // echo "Database successfully deleted";

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn->NULL;
?>