let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
    nav.classList.toggle("navclose");
})


// let selectedUserId = null;

function openPopup() {
//   selectedUserId = id;

  document.getElementById("popup").style.display = "flex";


}

function closePopup() {
  document.getElementById("popup").style.display = "none";
//   selectedUserId = null;
}

let joueur = document.getElementById('joueur')
let Gardient = document.getElementById('Gardient')
let position = document.getElementById('position')
const myForm = document.getElementById('myForm')
let getDataStorage = localStorage.getItem('users')
let parseUsers = JSON.parse(getDataStorage) || []
let editUserId = null;
let editMode = false;

function plyerAndgk() {
  let choix = position.value
  if (choix === 'Choisissez Votre Joueur') {
    Gardient.style.display = 'none'
    joueur.style.display = 'none'
  } else if (choix === 'GK') {
    Gardient.style.display = 'block'
    joueur.style.display = 'none'
  } else {
    joueur.style.display = 'block'
    Gardient.style.display = 'none'
  }
}