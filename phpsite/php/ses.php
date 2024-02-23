<?php
session_start();

if (isset($_SESSION['utilizator'])) {
    echo "Bun venit, " . $_SESSION["utilizator"];
    echo " id:   , " . $_SESSION["id"];


} else {
    echo "Sesiunea nu este pornită pentru niculn utilizator.";
}

?>