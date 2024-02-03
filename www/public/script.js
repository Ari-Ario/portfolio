
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

// popup for CV
function showPopupCV() {
  const popup = document.getElementById('cv');
  popup.style.display = 'block';
}

function hidePopupCV() {
  const popup = document.getElementById('cv');
  if (!isMouseOverPopup) {
    popup.style.display = 'none';
  }
}

function keepCVPopupOpen() {
  isMouseOverPopup = true;
}

function closeCVPopup() {
  isMouseOverPopup = false;
  hidePopupCV();
}

// footer for cellphone

function openFooterCellphone(){
    const home = document.getElementById('menu-container');
    home.style.display= 'none';
    const footer =document.getElementById('footer-navigation');
    footer.style.display= 'grid';
}

function openHome() {
    location.href = '/public/index.php'
}