require('./bootstrap');

const deleteButton = document.getElementById("delete-button");
const cancelButton = document.getElementById("cancel-button");
const alertWindow = document.getElementById("alert-window");
const blurrdeBackground = document.getElementById("background");

deleteButton.addEventListener("click", switchAlert);
cancelButton.addEventListener("click", switchAlert);

function switchAlert() {
    alertWindow.classList.toggle("d-none");
    blurrdeBackground.classList.toggle("d-none");
}
