<!DOCTYPE html>
<html>
<head>
    <title>Radu Online Market</title>
    <link rel="icon" href="img/online-shopping.png" />
    <link rel="icon" href="../img/online-shopping.png" />
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>


<?php
    include("../html/antet.html");     
    include("../php/conectare.php");
    include("../php/ses.php");
    $k=$_GET['k'];
    if (isset($k)) {include($k);}
    else{
    include("../php/content.php");
    }
?>

<?php 
    include("../html/footer.html");   
?>
    <script src="schimbare.js"></script>


</body>
</html>
