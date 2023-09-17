<?php

// getting all values from the HTML form
if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $subject =  $_POST['subject'];
    $message = $_POST['message'];
}

// database details
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbname';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Performing insert query execution
// here our table name is member_query
$sql = "INSERT INTO member_query  VALUES ('$name',
            '$email','$subject','$message')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Your message has been sent to us.</h3>";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
