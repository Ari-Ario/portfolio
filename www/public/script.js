
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

function openFooterCellphone(){
    const home = document.getElementById('menu-container');
    home.style.display= 'none';
    const footer =document.getElementById('footer-navigation');
    footer.style.display= 'grid';
}

function openHome() {
    location.href = '/public/index.php'
}