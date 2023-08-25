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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['cpass'];
    if ($password != $confirmPassword) {
        echo "Passwords do not match!";
    } else {
        $sql = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($sql) === true) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
