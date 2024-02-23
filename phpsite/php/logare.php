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

    function login($username, $parola) {
        global $conn;
        
        // Obțineți ID-ul utilizatorului din baza de date în funcție de nume de utilizator și parolă
        $sql = "SELECT id, username, parola FROM utilizatori WHERE username = '$username' AND parola = '$parola'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            // Dacă autentificarea este corectă, obțineți ID-ul utilizatorului și creați sesiunea
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            
            session_start();
            $_SESSION['utilizator'] = $username;
            $_SESSION['id'] = $id; // $id este ID-ul utilizatorului din baza de date
            header("Location: ../php/index.php");
            echo "este";
            exit();
        } else {
            echo "Nume de utilizator sau parolă incorectă.";
        }
    }
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $parola = $_POST['parola'];

    login($username, $parola);
}

    ?>
