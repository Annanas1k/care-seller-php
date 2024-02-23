<?php

$sql = "SELECT id, id_utilizator, nume_masina, marca, an_fabricatie, kilometraj, transmisie, pret, culoare, motor, imagine FROM masini";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Parcurgeți rezultatele și afișați fiecare produs sub formă de div
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
    echo "Nu s-au găsit produse.";
}

?>