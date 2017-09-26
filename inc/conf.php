<?php
$DB = ['localhost','root','admin','biblio'];

$conn = new mysqli($DB[0], $DB[1], $DB[2],$DB[3]);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 ?>
