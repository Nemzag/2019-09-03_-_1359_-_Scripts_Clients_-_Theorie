"use strict";

//-------------------------------------
// code appelé automatiquement
//-------------------------------------

document.getElementById("btnSaluer").addEventListener("click", saluerDs10Sec);
document.getElementById("btnStop").addEventListener("click", stopperSaluer);

document
	.getElementById("btnSaluer2")
	.addEventListener("click", saluerChaqueSec);
document.getElementById("btnStop2").addEventListener("click", stopperSaluer2);

/*
document.getElementById("btnSaluer3").addEventListener("click", function() {
	setTimeout(function() {
		alert("Salut 3");
	}, 10000);
});
*/

//-------------------------------------
// outils
//-------------------------------------
let timerSalut = null; // variable globale
function saluerDs10Sec() {
	if (timerSalut == null) {
		timerSalut = setTimeout(saluer, 3000);
		console.log("timerSalut :", timerSalut);
	}
}

function stopperSaluer() {
	clearTimeout(timerSalut);
	timerSalut = null;
	console.log("timerSalut :", timerSalut);
}

function saluer() {
	alert("Salut");
	timerSalut = null;
}

//-------------------------------------
let timerSalut2 = null; // variable globale

function saluerChaqueSec() {
	if (timerSalut2 == null) {
		timerSalut2 = setInterval(saluer2, 1000);
	}
}

function stopperSaluer2() {
	clearInterval(timerSalut2);
	timerSalut2 = null;
}

function saluer2() {
	console.log(new Date());
}
