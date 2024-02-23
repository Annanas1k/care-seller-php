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

// Datele utilizatorului
$nume = $_POST['nume'];
$username = $_POST['username'];
$parola = $_POST['parola'];
$locatie = $_POST['locatie'];
$numar_telefon = $_POST['numar_telefon'];

// Interogare SQL pentru inserarea utilizatorului
$sql = "INSERT INTO utilizatori (nume, username, parola, locatie, numar_telefon) 
        VALUES ('$nume', '$username', '$parola', '$locatie', '$numar_telefon')";

if ($conn->query($sql) === TRUE) {
    echo "Utilizatorul a fost înregistrat cu succes!";
} else {
    echo "Eroare: " . $sql . "<br>" . $conn->error;
}

// Închide conexiunea la baza de date
$conn->close();
?>
