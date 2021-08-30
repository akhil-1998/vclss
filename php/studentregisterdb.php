<?php
$servername = "sql113.epizy.com";
$username = "epiz_29571242";
$password = "IvGlLVsaTtOVzH3";
$dbname = "epiz_29571242_virtualclassdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email']; 
$college =  $_POST['college'];
$password =  $_POST['password'];


$sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `college`, `password`)
VALUES (NULL, '$firstname', '$lastname','$email','$college','$password')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('location: ../studentlogin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>