const toggleButton = document.getElementById("toggle-language");
const languageList = document.getElementById("language-list");

toggleButton.addEventListener("click", () => {
    if (languageList.style.display === "block") {
        languageList.style.display = "none";
    } else {
        languageList.style.display = "block";
    }
});

// Ascunde lista de limbi la clic în afara acesteia
document.addEventListener("click", (event) => {
    if (event.target !== toggleButton && event.target !== languageList) {
        languageList.style.display = "none";
    }
});
