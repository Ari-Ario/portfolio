
function incrementId(){
    const id = document.getElementById('question-id');
    console.log(id)
    id.value= id+1
    console.log(id)
}

function openPopupReport() {
    let popup = document.getElementById("popup");
    popup.style.display = "block";
}

function closePopupReport() {
    let popup = document.getElementById("popup");
    popup.style.display = "none";
}