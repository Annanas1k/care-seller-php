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

// Verificați dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obțineți datele din formular
    $nume_masina = $_POST['nume_masina'];
    $marca = $_POST['marca'];
    $an_fabricatie = $_POST['an_fabricatie'];
    $kilometraj = $_POST['kilometraj'];
    $transmisie = $_POST['transmisie'];
    $pret = $_POST['pret'];
    $culoare = $_POST['culoare'];
    $motor = $_POST['motor'];

    session_start();
    $id_utilizator = $_SESSION['id'];

    // Procesați imaginea încărcată
    $imagine = $_FILES['imagine'];
    $nume_imagine = $imagine['name'];
    $cale_temporara = $imagine['tmp_name'];
    $cale_destinatie = "../img/$nume_imagine";

    // Încărcați imaginea la destinația specificată
    move_uploaded_file($cale_temporara, $cale_destinatie);

    // SQL pentru inserarea datelor în baza de date
    $sql = "INSERT INTO masini (id_utilizator, nume_masina, marca, an_fabricatie, kilometraj, transmisie, pret, culoare, motor, imagine) VALUES ('$id_utilizator', '$nume_masina', '$marca', '$an_fabricatie', '$kilometraj', '$transmisie', '$pret', '$culoare', '$motor', '$cale_destinatie')";

    if (mysqli_query($conn, $sql)) {
        echo "Mașina a fost adăugată cu succes în baza de date.";
    } else {
        echo "Eroare la adăugarea mașinii: " . mysqli_error($conn);
    }

    // Închideți conexiunea la baza de date
    mysqli_close($conn);
}
?>
