<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dummydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO MyGuests (fname, email, gender, dob,addres,stat, pincode)
        VALUES ('$_POST[fname]','$_POST[email]','$_POST[gender]', '$_POST[dob]', '$_POST[address]', '$_POST[state]', '$_POST[pincode]' )";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>