
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/afisare_detalii.css" />
</head>
<body>
    


<?php
if (isset($_GET['id'])) {
   

    $product_id = $_GET['id'];

    $sql = "SELECT m.id_utilizator, m.nume_masina, m.marca, m.an_fabricatie, m.kilometraj, m.transmisie, m.pret, m.culoare, m.motor, m.imagine, u.nume, u.numar_telefon FROM masini m JOIN utilizatori u ON m.id_utilizator = u.id WHERE m.id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
    
        while ($row = $result->fetch_assoc()) {
            echo '<table>';

            echo '<tr>';
            echo '<td><strong>' . $row["nume_masina"] .' '. $row["marca"] . '</stong></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>';
            // Afișați imaginea
            echo '<img src="' . $row["imagine"] . '" alt="' . $row["nume_masina"] . '" width="200" height="150">';
            echo '</td>';
            echo '<td>';
            // Afișați numele utilizatorului, prețul și numărul utilizatorului în dreapta imaginii
            echo '<p>' . $row["nume"] . '</p>';
            echo '<p>$' . $row["pret"] . '</p>';
            echo '<p>' . $row["numar_telefon"] . '</p>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td colspan="2">';
    
            // Afișați informațiile suplimentare într-un alt rând
            echo '<tr>';
            echo '<td colspan="3">';
            echo '<p>An Fabricatie..... ' . $row["an_fabricatie"] . '</p>';
            echo '<p>Kilometraj.......... ' . $row["kilometraj"] . ' km </p>';
            echo '<p>Transmisie......... ' . $row["transmisie"] . '</p>';
            echo '<p>Motor................. ' . $row["motor"] . '</p>';
            echo '<p>Culoare............. ' . $row["culoare"] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
    } else {
        echo "Produsul nu a fost găsit.";
    }


} else {
    echo "ID-ul produsului lipsește din URL.";
}


?>

</body>
</html>