// function to Sign in with Gmail will be implemented later

//title image alternative to html
window.onload = function() {
    // Create a new image element
    const img = new Image();
    img.src = 'Docs/logo-title.png'; // the path to the image

    // Get the existing title element
    const titleElement = document.querySelector('title');

    // Create a new span element to hold the image
    const imageSpan = document.createElement('span');
    imageSpan.appendChild(img);

    // Append the image span to the title element
    titleElement.appendChild(imageSpan);
};


// Sign up 
let currentPage = 1;
selectedLanguage = "de";

function nextPage() {
    if (currentPage<= 0){
        currentPage= 1
    }else if (currentPage >= 5) {
        currentPage = 1
    } else if (currentPage === 2 || currentPage === 3) {
        checkValidation();
    }
    const mainPage = document.getElementById("main-page");
    mainPage.style.minWidth = "400px";
    const previousPage = document.getElementById(`page${currentPage}`);
    previousPage.style.display = "none";
    currentPage++;
    const newPage = document.getElementById(`page${currentPage}`);
    const newForm = document.getElementById(`form${currentPage}`);
    newPage.style.display = "block";
    newPage.style.textAlign = "center";
    newForm.style.width = "100%";
}

function backPage(pagenumber){
    if (pagenumber === 5) {
        currentPage = 1
    } else {

        currentPage = pagenumber-1;
    }
    const displayPage = document.getElementById(`page${pagenumber}`);
    displayPage.style.display = "none";
    const newPage = document.getElementById(`page${currentPage}`)
    newPage.style.display = "block";
    newPage.style.textAlign = "center";
}

// extra method, in case you go back step by step instead of jumping to second page
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        // updatePage();
    }
}


function changeLanguage(lang){
/*     const language= document.getElementById("language");
    const selectedLanguage = language.value; */
    selectedLanguage = lang.value;

    // elements of first page
    const email = document.getElementById("email")
    const signIn = document.getElementById("sign-in")
    const gmailSignIn= document.getElementById("gmail-sign-in")
    const or = document.getElementById("or")
    const signUp = document.getElementById("sign-up")

    // elements of second page
    const dear = document.getElementById("dear")
    const mr = document.getElementById("mr")
    const mrs = document.getElementById("mrs")
    const firstNameLabel = document.getElementById("first-name-label")
    const lastNameLabel = document.getElementById("last-name-label")
    const emailPage2 = document.getElementById("email-address-page2")
    const birthday = document.getElementById("birthday-label")
    const street = document.getElementById("street-label")
    const nextPage = document.getElementById("next-page")

    // elements of third page
    const plz = document.getElementById("plz")
    const place = document.getElementById("place")
    const telG = document.getElementById("tel-g")
    const telP = document.getElementById("tel-p")
    const agb = document.getElementById("agb")
    const newsLetter = document.getElementById("newsletter")
    const remark = document.getElementById("remark")
    const check = document.getElementById("check")

    // elements of fourth page
    const back = document.querySelectorAll(".back-btn")
    const home = document.getElementById("home")

    const send = document.getElementById("send")

    // elements of fifth page
    const informationSent = document.getElementById("information-sent")

    if (lang.value === "en") {
        email.innerHTML = "Email Address"
        signIn.value = "Sign in"
        gmailSignIn.value = "Sign in with Gmail"
        or.innerHTML= "or"
        signUp.value = "Sign up"

        dear.innerHTML = "Dear"
        mr.innerHTML= "Mr"
        mrs.innerHTML= "Mrs/Miss"
        mr.value= "Mr"
        mrs.value= "Mrs/Miss"
        firstNameLabel.innerHTML= "First name"
        lastNameLabel.innerHTML= "Last name"
        emailPage2.innerHTML= "Email address"
        birthday.innerHTML= "Birthday"
        street.innerHTML= "street"
        nextPage.value = "Next"

        plz.innerHTML= "Postcode"
        place.innerHTML= "Town/City"
        telG.innerHTML= "Phone number"
        telP.innerHTML= "Cell-phone number"
        // agb.innerHTML= "AGB"
        // newsLetter.innerHTML= ""
        remark.innerHTML= "Remark"
        check.value= "Check"
        back.forEach(backwards => {
            backwards.value = "Back";
        })
        home.value = "Home"
        send.value= "Send"

        informationSent.innerHTML= "Your information was sent successfully."
    } else if (lang.value === "de") {
        location.reload();
    }
}

function storeValues(){
    event.preventDefault()
    // elements of second page
    const dearInput = document.getElementById("gender").value;
    const firstNameInput = document.getElementById("first-name-input");
    const lastNameInput = document.getElementById("last-name-input");
    const emailAddressInput = document.getElementById("email-address-input");
    const birthdayInput = document.getElementById("birthday-input").value;
    const streetInput = document.getElementById("street-input").value;
    
    // elements of third page
    const plzInput = document.getElementById("plz-input").value;
    const ortInput = document.getElementById("ort-input").value;
    const telGInput = document.getElementById("tel-g-input");
    const telPInput = document.getElementById("tel-p-input").value;
    const agbInput = document.getElementById("agb-input");
    const newsletterInput = document.getElementById("newsletter-input");


    // declaring and storing the items:
    sessionStorage.setItem("Dear", dearInput);
    sessionStorage.setItem("First-name", firstNameInput.value);
    sessionStorage.setItem("Last-name", lastNameInput.value);
    sessionStorage.setItem("Email-address", emailAddressInput.value);
    sessionStorage.setItem("Born-at", birthdayInput);
    sessionStorage.setItem("Street", streetInput);
    sessionStorage.setItem("Postalcode", plzInput);
    sessionStorage.setItem("Place", ortInput);
    sessionStorage.setItem("Telephone-number", telGInput.value);
    sessionStorage.setItem("Cellphone-number", telPInput);
    sessionStorage.setItem("AGB-confirmation", agbInput.checked);
    sessionStorage.setItem("Newsletter-confirmation", newsletterInput.checked);

    nextPage()
    previewItems()
}

function previewItems(){
    // document.getElementById("all-pages").reset()
    const infoOutput = document.getElementById("info-output");
    const language= document.getElementById("lang-selection");
    const selectedLanguage = language.value;

    const dear = sessionStorage.getItem("Dear");
    const fName= sessionStorage.getItem("First-name");
    const lName= sessionStorage.getItem("Last-name");
    const mail= sessionStorage.getItem("Email-address");
    const born= sessionStorage.getItem("Born-at");
    const street = sessionStorage.getItem("Street");
    const postalcode= sessionStorage.getItem("Postalcode");
    const place= sessionStorage.getItem("Place") || "";
    const tel=sessionStorage.getItem("Telephone-number");
    const cellPhone= sessionStorage.getItem("Cellphone-number");
    const agb= sessionStorage.getItem("AGB-confirmation");
    const newsletter= sessionStorage.getItem("Newsletter-confirmation");

    if (selectedLanguage == "de") {
        infoOutput.innerHTML = `Angaben:<br>  Anrede: ${dear}<br> Vorname: ${fName}<br> Nachname: ${lName}<br> Email Adresse: ${mail}<br> Gebrtsdatum: ${born}<br> 
        Adresse: ${street}, ${postalcode}, ${place}<br> Telefonnummer: ${tel}<br> Handynummer:${cellPhone}<br> AGB Zustimmung: ${agb}<br> Newsletter Zustimmung: ${newsletter}<br>`
    } else if (selectedLanguage == "en") {
        infoOutput.innerHTML = `Informations:<br>  Gender: ${dear}<br> first name: ${fName}<br> last name: ${lName}<br> Email-address: ${mail}<br> Birthday: ${born}<br> 
        Address: ${street}, ${postalcode}, ${place}<br> Phone number: ${tel}<br> Cellphone number: ${cellPhone}<br> AGB-confirmation: ${agb}<br> Newsletter-confirmation: ${newsletter}<br>`
    }

}

function confirmationPage(sth) {
    const confirmedInfo = document.getElementById("information-sent");
    const language= document.getElementById("lang-selection");
    const selectedLanguage = language.value;    
    
    if (selectedLanguage == "de") {
        confirmedInfo.innerHTML = `Ihre Informationen sind bei uns eingetroffen!`
    } else if (selectedLanguage == "en") {
        confirmedInfo.innerHTML = `We have recieved your Information successfully!`
    }
    if (!sth){
        return;
    } else {
        nextPage();
        setTimeout(function(){location.reload();}, 5000);

    }
}


//Validation forms
function checkValidation() {
    const validationRed = "#EC4899";
    const bgColor = "#EEE"
    let firstNameElement = document.forms["second-form"]["first-name"];
    const firstNameValue = firstNameElement.value;
    let lastNameElement = document.forms["second-form"]["last-name"];
    const lastNameValue = lastNameElement.value;
    let emailElement = document.forms["second-form"]["email-address"];
    const emailValue = emailElement.value;

    let telElement = document.forms["third-form"]["tel-p"];
    const telValue = telElement.value;
    let agbElement = document.forms["third-form"]["agb"];
    const agbValue = agbElement.value;
    console.log(agbValue, typeof(agbValue))

    // condition is named breakme to be able to be broken like a loop
    breakme: 
        if (firstNameValue && currentPage===2) {
            firstNameElement.style.backgroundColor = bgColor;
        } 
        else if (!firstNameValue && currentPage===2) {
          firstNameElement.style.backgroundColor = validationRed;
          return breakme;
        }

        if (lastNameValue && currentPage===2) {
            lastNameElement.style.backgroundColor = bgColor;
        }
        else if (!lastNameValue && currentPage===2) {
            lastNameElement.style.backgroundColor = validationRed;
            return breakme;
        }

        if ((currentPage== 2) && (!emailValue || !validateEmail(emailValue))) {
            emailElement.style.backgroundColor = validationRed;
            return breakme;
        } else if (emailValue && validateEmail(emailValue) && currentPage=== 2) {
            emailElement.style.backgroundColor = bgColor;
        }

        if (telValue && currentPage === 3) {
            telElement.style.backgroundColor = bgColor;
        } 
        else if (!telValue && currentPage === 3) {
            telElement.style.backgroundColor = validationRed;
            return breakme;
        }

        if (!agbElement.checked && currentPage===3) {
        agbElement.style.backgroundColor = validationRed;
        if (selectedLanguage == "de"){
            alert("AGB zustimmen, bitte!")
        } else if (selectedLanguage == "en"){
            alert("accept AGB, please!")
        }
        return breakme;
        } else { return; }

    function validateEmail(emailValue){
        let emailElement = document.forms["second-form"]["email-address"];
        const emailVal = emailElement.value;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(emailVal.match(mailformat))
        {
            return true;
        }
        else
        {
            emailElement.style.backgroundColor = "#EC4899";
            if (selectedLanguage == "de"){
                alert("Die email Adresse ist nicht gültig!");
            } else if (selectedLanguage == "en"){
                alert("You have entered an invalid email address!");

            }
            return false;
        }
    }
  }

