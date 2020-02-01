// Get the modal
var modalSign = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSign) {
        modal.style.display = "none";
    }
}
