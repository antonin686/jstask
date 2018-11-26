<?php 
include('confiq.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = "INSERT INTO users (firstname, lastname, phone, email, pass) VALUES ('$fname', '$lname', '$phone', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>