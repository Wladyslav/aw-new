// Odniesienie do elementu okna popup
var popup = document.getElementsByClassName('contact-form-popup')[0];

// Dodaj zdarzenie 'click' do wszystkich przycisków z klasą 'popup-open'
var openButtons = document.getElementsByClassName('popup-open');
for (var i = 0; i < openButtons.length; i++) {
    openButtons[i].addEventListener('click', function() {
        // Otwórz okno popup
        popup.style.display = 'block';
    });
}

// Dodaj zdarzenie 'click' do przycisku zamykającego
var closeButton = document.getElementsByClassName('close-button')[0];
closeButton.addEventListener('click', function() {
    // Zamknij okno popup
    popup.style.display = 'none';
});

// Zamknij okno popup, kiedy użytkownik kliknie poza nim
window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = 'none';
    }
};


