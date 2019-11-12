/*
 * accès aux objets d'une page html (DOM) et du navigateur (BOM)
 * + quelques méthodes, propriétés...
 * (voir la documentation officielle pour plus d'infos)
 */

//---------------------------------------------------------
// * accès aux objets du DOM (Document Object Model)
//---------------------------------------------------------

// désignation d'un ou plusieurs objets du document

let n = document.getElementById("txtNom"); // élément ayant la propriété id = "txtNom"
let p = document.getElementsByTagName("p"); // collection de tous les éléments de type <p>
let r = document.getElementsByClassName("rouge"); // collection de tous les éléments de classe = "rouge"
let c = document.getElementsByName("choix"); // collection  de tous les éléments avec name = "choix"

let garage = document.getElementById("divGarage");
let voitures = garage.getElementsByTagName("p"); // tous les <p> du <div id="divGarage">

let toutesVoitures = document.querySelectorAll("#divGarage > p"); // tous les <p> du <div id="divGarage">
let premiereVoiture = document.querySelector("#divGarage > p"); // le premier <p> du <div id="divGarage">
// querySelector et querySelectorAll utilisent la syntaxe des sélecteurs CSS

//---------------------------------------------------------
// * accès aux contenu des objets du DOM
//---------------------------------------------------------

// pour les balises de type container (div, h1, td, p...)

let voiture1_balise = document.querySelector("#divGarage > p").innerHTML; // lecture du texte interprété
let voiture1_texte = document.querySelector("#divGarage > p").textContent; // lecture du texte à plat

document.querySelector("#divGarage > p").innerHTML = "Volvo <strong>rouge</strong>"; // la balise strong sera interprétée
document.querySelector("#divGarage > p").textContent = "Volvo <strong>rouge</strong>"; // <strong> sera un simple texte

// pour les balises de type autofermantes (input, img...)

let nom = document.getElementById("txtNom").value;

document.getElementById("txtNom").value = "Alonzo";

// quelques exemples de méthodes ou fonctions...
let classes = document.getElementById("txtNom").classList; // liste des classes
document.getElementById("div1").style.marginTop = ".25cm";
document.getElementById("txtNom").setAttribute("required", "");

//---------------------------------------------------------
// * accès aux objets du BOM (Browser Object Model)
//---------------------------------------------------------

// popup avec bouton OK
window.alert("Bonjour");

// popup avec OK et CANCEL
// OK renvoie true et CANCEL renvoie false
window.confirm("Encore ?");

// popup avec OK, CANCEL et zone de saisie
// OK renvoie la valeur saisie et CANCEL renvoie null
let nom = prompt("votre nom ?");

// quelques exemples de méthodes ou fonctions...
window.history.back(); // page précédente
let adresse = window.location; // URL courante
let largeur = window.innerWidth; // largeur interne de la fenêtre
//---------------------------------------------------------
