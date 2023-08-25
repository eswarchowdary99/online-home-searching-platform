<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "test"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";
    if ($conn->query($sql) === true) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
