<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/filtru.css" />
</head>
<body>  
    <h1>Filtru</h1> 
<form method="POST" action="procesare_filtru.php">

<label for="numa_masina">Denumire:</label>
    <select name="nume_masina" id="nume_masina">
        <option value="">Toate</option>
        <?php
        // Interogare pentru a obține toate anurile de fabricație disponibile din baza de date
        $sql = "SELECT DISTINCT nume_masina FROM masini";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['nume_masina'] . "'>" . $row['nume_masina'] . "</option>";
            }
        }
        ?>
    </select>

    <label for="marca">Model:</label>
    <select name="marca" id="marca">
        <option value="">Toate</option>
        <?php
        // Interogare pentru a obține toate mărcile disponibile din baza de date
        $sql = "SELECT DISTINCT marca FROM masini";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['marca'] . "'>" . $row['marca'] . "</option>";
            }
        }
        ?>
    </select>

    <label for="an_fabricatie">Alegeți anul de fabricație:</label>
    <select name="an_fabricatie" id="an_fabricatie">
        <option value="">Toate</option>
        <?php
        // Interogare pentru a obține toate anurile de fabricație disponibile din baza de date
        $sql = "SELECT DISTINCT an_fabricatie FROM masini";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['an_fabricatie'] . "'>" . $row['an_fabricatie'] . "</option>";
            }
        }
        ?>
    </select>

    <label for="culoare">Alegeți culoarea:</label>
    <select name="culoare" id="culoare">
        <option value="">Toate</option>
        <?php
        // Interogare pentru a obține toate culorile disponibile din baza de date
        $sql = "SELECT DISTINCT culoare FROM masini";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['culoare'] . "'>" . $row['culoare'] . "</option>";
            }
        }
        ?>
    </select>

    <label for="motor">Alegeți motorul:</label>
    <select name="motor" id="motor">
        <option value="">Toate</option>
        <?php
        // Interogare pentru a obține toate tipurile de motoare disponibile din baza de date
        $sql = "SELECT DISTINCT motor FROM masini";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['motor'] . "'>" . $row['motor'] . "</option>";
            }
        }
        ?>
    </select>
    <a href="index.php?k=../php/procesare_filtru.php" id="schimbaConținutLink"><input type="submit" value="Filtrează și Exportă"></a>
   
</form>

</body>
</html>