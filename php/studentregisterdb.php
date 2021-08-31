<?php

include 'db.php';

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email']; 
$college =  $_POST['college'];
$password =  $_POST['password'];


$params = array($firstname,$lastname,$email,$college,$password);
$sql="INSERT INTO users (firstname,lastname, email, college, password)
VALUES ( ?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: ../studentlogin.php');  
} 

?>