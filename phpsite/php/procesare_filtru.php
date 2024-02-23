<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radu Online Market</title>
    <link rel="icon" href="../img/online-shopping.png" />
    <link rel="stylesheet" type="text/css" href="../css/procesare_filtru.css">

</head>
<body>
    

<?php
include("../html/antet.html");

// Conectați-vă la baza de date sau utilizați metoda dvs. de conectare
include("../php/conectare.php");
// Obțineți valorile trimise prin formular
$nume_masina = $_POST['nume_masina'];
$marca = $_POST['marca'];
$an_fabricatie = $_POST['an_fabricatie'];
$culoare = $_POST['culoare'];
$motor = $_POST['motor'];

// Construiți interogarea SQL bazată pe selecțiile utilizatorului
$sql = "SELECT * FROM masini WHERE 1 = 1"; // 1=1 pentru a asigura condiții viitoare

if (!empty($nume_masina)) {
    $sql .= " AND nume_masina = '$nume_masina'";
}

if (!empty($marca)) {
    $sql .= " AND marca = '$marca'";
}

if (!empty($an_fabricatie)) {
    $sql .= " AND an_fabricatie = '$an_fabricatie'";
}

if (!empty($culoare)) {
    $sql .= " AND culoare = '$culoare'";
}

if (!empty($motor)) {
    $sql .= " AND motor = '$motor'";
}

// Executați interogarea și afișați rezultatele
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="produs">';
        echo '<a href="index.php?k=../php/afisare_detalii.php&id=' . $row["id"] . '">'; 
        echo '<img src="' . $row["imagine"] . '" alt="' . $row["nume_masina"] . '"width="350" height="200">';
        echo '<h2>' . $row["nume_masina"] .' '. $row["marca"] . '</h2>';
        echo '<p>$' . $row["pret"] . ' - ' .  $row["kilometraj"] . ' km </p>';
        echo '</a>';
        echo '</div>';
    }
} else {
    echo "Niciun rezultat găsit conform filtrului selectat.";
}
include("../html/footer.html");

?>

</body>
</html>