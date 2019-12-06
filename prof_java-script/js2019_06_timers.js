"use strict";

//-------------------------------------
// code appelé automatiquement
//-------------------------------------

let $btnStart = document.getElementById("btnStart");
let $btnStop = document.getElementById("btnStop");
let $btnReset = document.getElementById("btnReset");

$btnStart.addEventListener("click", startCpt);
$btnStop.addEventListener("click", stopCpt);
$btnReset.addEventListener("click", resetCpt);

let $txtCpt = document.getElementById("txtCpt");

resetCpt();

//-------------------------------------
// outils
//-------------------------------------
let timerCpt = null; // variable globale

function startCpt() {
	if (timerCpt == null) {
		timerCpt = setInterval(incCpt, 1000);
		$btnStart.setAttribute("disabled", "");
		$btnStop.removeAttribute("disabled");
		$btnReset.setAttribute("disabled", "");
	}
}
function stopCpt() {
	clearInterval(timerCpt);
	timerCpt = null;
	$btnStart.removeAttribute("disabled");
	$btnStop.setAttribute("disabled", "");
	$btnReset.removeAttribute("disabled");
}

function incCpt() {
	$txtCpt.value = parseInt($txtCpt.value) + 1;
}

function resetCpt() {
	$txtCpt.value = 0;
	$btnStart.removeAttribute("disabled");
	$btnStop.setAttribute("disabled", "");
	$btnReset.setAttribute("disabled", "");
}

//-------------------------------------
