<?php
$conn = new mysqli("localhost", "root", "22571042Tr!", "world");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>