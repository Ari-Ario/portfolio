
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

// phone plus slide images
$('.slider').owlCarousel({
  items: 1,
  singleItem:true,
  nav: true,
  dots: false,
  loop: true,
  autoPlay: 3000
}); 

// cellphone photo-cover

const images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg'];
let currentImageIndex = 0;
let autoChangeInterval;

function changeImage(index) {
    const image = document.querySelector('#image-container img');
    currentImageIndex = index - 1; // Subtract 1 to match array index
    image.src = images[currentImageIndex];
}

function restoreImage() {
    const image = document.querySelector('#image-container img');
    // Restore to the first image when the mouse leaves
    image.src = images[0];
}

function startAutoChange() {
    autoChangeInterval = setInterval(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        changeImage(currentImageIndex + 1); // Add 1 to match the array index
    }, 2000); // Change image every 3000 milliseconds (3 seconds)
}

function stopAutoChange() {
    clearInterval(autoChangeInterval);
    restoreImage();
}

// Start auto-changing images on page load
startAutoChange();

