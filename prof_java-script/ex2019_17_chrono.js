"use strict";
//---------------------------------------------------------
// init variables, évènements...
//---------------------------------------------------------
const $btnStart = document.getElementById("btnStart");
const $btnLap = document.getElementById("btnLap");
const $btnStop = document.getElementById("btnStop");
const $btnReset = document.getElementById("btnReset");
const $txtChrono = document.getElementById("txtChrono");
const $divLap = document.getElementById("divLap");

//-------------------------------------
$btnStart.addEventListener("click", startChrono);
$btnLap.addEventListener("click", lapChrono);
$btnStop.addEventListener("click", stopChrono);
$btnReset.addEventListener("click", resetChrono);

//-------------------------------------
resetChrono();

//---------------------------------------------------------
// gestion du chrono
//---------------------------------------------------------
// variables globales
let startTime; // heure de début du chronométrage
let timer; // gestion du timer d'affichage du chrono

function startChrono() {
  startTime = new Date();
  timer = setInterval(affChrono, 1);

  $btnStart.disabled = true;
  $btnLap.disabled = false;
  $btnStop.disabled = false;
  $btnReset.disabled = true;
}

function lapChrono() {
  let now = new Date();
  let time = now - startTime; //durée en ms
  $divLap.innerHTML += tps2String(time) + "<br/>";
}

function stopChrono() {
  let now = new Date();
  clearInterval(timer);

  let time = now - startTime; //durée en ms
  $divLap.innerHTML += tps2String(time) + "<br/>";

  $txtChrono.value = tps2String(time); // correction pour éviter différences affichages

  $btnStart.disabled = true;
  $btnLap.disabled = true;
  $btnStop.disabled = true;
  $btnReset.disabled = false;
}

function resetChrono() {
  $divLap.innerHTML = "";
  $txtChrono.value = tps2String(0);

  $btnStart.disabled = false;
  $btnLap.disabled = true;
  $btnStop.disabled = true;
  $btnReset.disabled = true;
}

// fonction appelée toutes les 1 ms
function affChrono() {
  let now = new Date();
  let time = now - startTime; //durée en ms
  $txtChrono.value = tps2String(time);
}

//---------------------------------------------------------
// outils
//---------------------------------------------------------

// ms => hh:mm:ss,ms
function tps2String(tps_ms) {
  let temps = new Date(tps_ms);

  let heures = temps
    .getUTCHours()
    .toString()
    .padStart(2, "0");
  let minutes = temps
    .getUTCMinutes()
    .toString()
    .padStart(2, "0");
  let secondes = temps
    .getUTCSeconds()
    .toString()
    .padStart(2, "0");
  let millisec = temps
    .getUTCMilliseconds()
    .toString()
    .padStart(3, "0");
  return heures + ":" + minutes + ":" + secondes + "," + millisec;
}
