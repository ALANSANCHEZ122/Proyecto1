document.getElementById('designSurvey').addEventListener('submit', function(event) {
    event.preventDefault();
    document.getElementById('thanksMessage').classList.add('show');
});

function closePopup() {
    document.getElementById('thanksMessage').classList.remove('show');
    // Redireccionar a la página principal después de cerrar el popup
    window.location.href = 'index.html';
}
