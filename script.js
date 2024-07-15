// import './styles.css';

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


// cellphone photo-cover

const images = ['screenshot1.png', 'screenshot2.png', 'screenshot3.png'];
let currentImageIndex = 0;
let autoChangeInterval;

function changeImage(index) {
    const image = document.querySelector('#image-container-macbook img');
    currentImageIndex = index - 1; // Subtract 1 to match array index
    image.src = images[currentImageIndex];
}

function restoreImage() {
    const image = document.querySelector('#image-container-macbook img');
    // Restore to the first image when the mouse leaves
    image.src = images[0];
}

function startAutoChange() {
    autoChangeInterval = setInterval(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        changeImage(currentImageIndex + 1); // Add 1 to match the array index
    }, 3000); // Change image every 3000 milliseconds (3 seconds)
}

function stopAutoChange() {
    clearInterval(autoChangeInterval);
    restoreImage();
}

// Start auto-changing images on page load
startAutoChange();


// redirecting from mainPage to Form 
function redirectToForm() {
  window.location.href = "signup-form/index-form.php";
}

function redirectToQuiz(){
  window.location.href = "quiz/index-quiz.php";
}




function saveSearchQuery() {
  const searchQuery = document.getElementById('search-field').value;
  sessionStorage.setItem('searchQuery', searchQuery);
  // Redirect to root before submitting the form
  // window.location.href = '/';
  //return false; // Prevent form submission
  hidePopup()
}