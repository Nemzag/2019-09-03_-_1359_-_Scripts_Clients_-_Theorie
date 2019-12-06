"use strict";

// Code appelé automatiquement

// On stocke dans trois variables l'id des trois boutons
let $btnStart = document.getElementById("btnStart");
let $btnStop = document.getElementById("btnStop");
let $btnReset = document.getElementById("btnReset");

// On ajoute un écouteur d'événement à chaque variable
$btnStart.addEventListener("click", start);
$btnStop.addEventListener("click", stop);
$btnReset.addEventListener("click", reset);

// On stocke dans une variable l'id du timer
let $timer = document.getElementById("timer");

// Appel de la fonction reset() qui permet de réinitialiser le timer
reset();

// Affichage de la date actuelle dans la console de l'inspecteur
console.log(new Date());

// Outils

// Déclaration et initialisation de la variable chrono
let $chrono = null;

// Fonction permettant le démarrage du timer
function start() {
    if($chrono == null) {
        $chrono = setInterval(incCpt, 1000);
        $btnStart.setAttribute("disabled", "");
        $btnStop.removeAttribute("disabled");
        $btnReset.setAttribute("disabled", "");
    }
}

// Fonction permettant l'arrêt du timer
function stop() {
    clearInterval($chrono);
    $chrono = null;
    $btnStart.removeAttribute("disabled");
    $btnStop.setAttribute("disabled", "");
    $btnReset.removeAttribute("disabled");
}

// fonction qui incrémente le compteur
function incCpt() {
    $timer.value = parseInt($timer.value) + 1;
}

// Fonction permettant la réinitialisation du timer
function reset() {
    $timer.value = 0;

    $btnStart.removeAttribute("disabled");
    $btnStop.setAttribute("disabled", "");
    $btnReset.setAttribute("disabled", "");
}