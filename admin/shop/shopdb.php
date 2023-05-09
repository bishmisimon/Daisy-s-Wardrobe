<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_db";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 

 
if($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>