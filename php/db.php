<?php
$servername = "sql210.epizy.com";
$username = "epiz_29578337";
$password = "rT2kwOFgLK0dx";
$dbname = "epiz_29578337_vclassdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>