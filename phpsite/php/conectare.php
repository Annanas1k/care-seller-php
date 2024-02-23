<?php
$servername = "localhost"; 
$username = "vanzare_masini"; 
$password = "vanzare_masini"; 
$database = "sitevanzaremasini"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
} else {
    echo "!";
}

?>
