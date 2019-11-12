"use strict";
//=========================================================================

// alias
let $divCalculs = document.getElementById("divCalculs");
let $btnVerif = document.getElementById("btnVerif");
//---------------------------------------------------------

// associer la fonction nouvLgCalcul au bouton verif
$btnVerif.addEventListener("click", nouvLgCalcul);

//---------------------------------------------------------

let $lgCalcul = document.getElementsByClassName("lgCalcul")[0];

$lgCalcul.removeChild($btnVerif); // enlever le bouton de la ligne à dupliquer
let $modLgCalcul = $lgCalcul.cloneNode(true); // stocker la ligne à dupliquer
//$lgCalcul.remove(); // supprimer la ligne qui a servi de modèle
$divCalculs.innerHTML = "";
$lgCalcul = null;

//---------------------------------------------------------
nouvLgCalcul();

//---------------------------------------------------------

function nouvLgCalcul() {
	let $nouvLgCalcul = $modLgCalcul.cloneNode(true);
	let c = calculAlea();

	$nouvLgCalcul.getElementsByClassName("nb1")[0].value = c.nb1;
	$nouvLgCalcul.getElementsByClassName("nb2")[0].value = c.nb2;
	$nouvLgCalcul.getElementsByClassName("operateur")[0].innerHTML = c.op;
	$nouvLgCalcul.getElementsByClassName("rep")[0].setAttribute("rep", c.rep);
	//$nouvLgCalcul.getElementsByClassName("rep")[0].focus();

	$nouvLgCalcul.appendChild($btnVerif);

	if ($divCalculs.childNodes.length > 0) clotureLgCalcul();

	$divCalculs.appendChild($nouvLgCalcul);
	$nouvLgCalcul.getElementsByClassName("rep")[0].focus();
}

function clotureLgCalcul() {
	let $dernLgCalcul = $divCalculs.lastChild;
	let $rep = $dernLgCalcul.getElementsByClassName("rep")[0];

	$rep.setAttribute("readonly", "");

	// TODO verif chaines vides
	if (Number($rep.value) === Number($rep.getAttribute("rep"))) {
		$rep.classList.add("repOK");
	} else {
		$rep.classList.add("repPasOK");
	}
}

//=========================================================================
function nbreAlea(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
//---------------------------------------------------------
function calculAlea() {
	//let calcul = new Object();
	let calcul = {};

	let op = nbreAlea(1, 4);

	switch (op) {
		case 1:
			calcul.op = "+";
			calcul.nb1 = nbreAlea(1, 20);
			calcul.nb2 = nbreAlea(1, 20);
			calcul.rep = calcul.nb1 + calcul.nb2;
			break;
		case 2:
			calcul.op = "-";
			calcul.nb1 = nbreAlea(1, 20);
			calcul.nb2 = nbreAlea(1, 20);
			if (calcul.nb1 < calcul.nb2) {
				[calcul.nb1, calcul.nb2] = [calcul.nb2, calcul.nb1];
			}
			calcul.rep = calcul.nb1 - calcul.nb2;
			break;
		case 3:
			calcul.op = "*";
			calcul.nb1 = nbreAlea(2, 10);
			calcul.nb2 = nbreAlea(2, 10);
			calcul.rep = calcul.nb1 * calcul.nb2;
			break;
		case 4:
			calcul.op = "/";
			calcul.nb1 = nbreAlea(2, 10);
			calcul.nb2 = nbreAlea(2, 10);
			calcul.rep = calcul.nb1 * calcul.nb2;
			[calcul.nb1, calcul.rep] = [calcul.rep, calcul.nb1];
			break;
	}

	return calcul;
} //function calculAlea(){
//=========================================================================
