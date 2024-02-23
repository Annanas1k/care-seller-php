// schimbare.js

// Funcția pentru a schimba conținutul divului cu ID-ul "div2" din "content.php"
function schimbaConținut() {
    event.preventDefault(); // Oprește urmarea link-ului

    var div2 = document.getElementById("div2");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            div2.innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "procesare_filtru.php", true);
    xhttp.send();
}

// Adaugăm gestionarea evenimentului clic pe link
var schimbaConținutLink = document.getElementById("schimbaConținutLink");
schimbaConținutLink.addEventListener("click", schimbaConținut);
