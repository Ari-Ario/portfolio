
let isMouseOverPopup = false;

function showPopup() {
  const popup = document.getElementById('popup');
  popup.style.display = 'grid';
}

function hidePopup() {
  const popup = document.getElementById('popup');
  if (!isMouseOverPopup) {
    popup.style.display = 'none';
  }
}

function keepPopupOpen() {
  isMouseOverPopup = true;
}

function closePopup() {
  isMouseOverPopup = false;
  hidePopup();
}