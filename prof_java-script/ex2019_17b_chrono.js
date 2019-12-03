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
let startTime; //heure de début du chronométrage
let prevTime; //heure du précédent lap time
let cptLaps; //cpt de laps
let timerChrono; //gestion du timer

let totalTime = 0; //temps total
let bestLapTime = Infinity; //meilleur lapTime
let $bestPLap = null;

//-------------------------------------

function startChrono() {
	$btnStart.disabled = true;
	$btnLap.disabled = false;
	$btnStop.disabled = false;
	$btnReset.disabled = true;

	startTime = new Date();
	prevTime = startTime;
	cptLaps = 0;
	affChrono();
}

function lapChrono() {
	let now = new Date();
	totalTime = now - startTime;
	let lapTime = now - prevTime;

	cptLaps++;
	let $pLap = document.createElement("p");
	$pLap.innerHTML =
		cptLaps.toString().padStart(2, "0") +
		". +" +
		tps2String(lapTime) +
		" => [" +
		tps2String(totalTime) +
		"]";
	$pLap.classList.add("lap-time");
	$pLap.setAttribute("lapTime", lapTime);

	if (lapTime < bestLapTime) {
		if ($bestPLap) $bestPLap.classList.remove("best-lap-time");
		$pLap.classList.add("best-lap-time");
		bestLapTime = lapTime;
		$bestPLap = $pLap;
	}

	$divLap.appendChild($pLap);

	prevTime = now;
}

function stopChrono() {
	clearTimeout(timerChrono);
	lapChrono();
	$txtChrono.value = tps2String(totalTime);

	$btnStart.disabled = true;
	$btnLap.disabled = true;
	$btnStop.disabled = true;
	$btnReset.disabled = false;
}

function resetChrono() {
	$btnStart.disabled = false;
	$btnLap.disabled = true;
	$btnStop.disabled = true;
	$btnReset.disabled = true;

	$txtChrono.value = tps2String(0);
	$divLap.innerHTML = "";
}

function affChrono() {
	clearTimeout(timerChrono);

	$txtChrono.value = tps2String(new Date() - startTime);
	timerChrono = setTimeout(affChrono, 1);
}

//---------------------------------------------------------
// outils divers
//---------------------------------------------------------

// ms => hh:mm:ss,ms
function tps2String(tps_ms) {
	let temps = new Date(tps_ms);

	//let heures = ("0" + temps.getUTCHours()).slice(-2);
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

//-----------------------------------------------------------------------------
