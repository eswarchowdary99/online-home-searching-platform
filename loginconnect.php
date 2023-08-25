<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    
    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql) === true) {
        echo "Login successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
