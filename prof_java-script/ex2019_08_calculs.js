//=========================================================================
let $btnNouvCalc = document.getElementById("btnNouvCalc");
let $btnVerif = document.getElementById("btnVerif");

let $txtNb1 = document.getElementById("txtNb1");
let $txtNb2 = document.getElementById("txtNb2");
let $txtRep = document.getElementById("txtRep");

let $spanNbRepOK = document.getElementById("spanNbRepOK");
let $spanNbRepPasOK = document.getElementById("spanNbRepPasOK");

let nbRepOK = 0;
let nbRepPasOK = 0;

//---------------------------------------------------------
$btnVerif.addEventListener("click", verifCalcul);
$btnNouvCalc.addEventListener("click", nouveauCalcul);

$btnVerif.setAttribute("disabled", "");

affResultats();

//---------------------------------------------------------
function nouveauCalcul() {
	$btnNouvCalc.setAttribute("disabled", "");

	let c = calculAlea();

	$txtNb1.value = c.nb1;
	$txtNb2.value = c.nb2;
	$txtRep.value = "";

	$txtRep.removeAttribute("readonly");
	$txtRep.classList = "";
	$txtRep.focus();

	$btnVerif.removeAttribute("disabled");
}
//---------------------------------------------------------
function verifCalcul() {
	$btnVerif.setAttribute("disabled", "");
	$txtRep.setAttribute("readonly", "");

	let rep = Number($txtNb1.value) + Number($txtNb2.value);

	if (Number($txtRep.value) === rep) {
		$txtRep.className = "repOK";
		nbRepOK++;
	} else {
		$txtRep.className = "repPasOK";
		nbRepPasOK++;
	}

	affResultats();
	$btnNouvCalc.removeAttribute("disabled");
}
//---------------------------------------------------------
function affResultats() {
	$spanNbRepOK.innerHTML = nbRepOK;
	$spanNbRepPasOK.innerHTML = nbRepPasOK;
}

//=========================================================================
function nbreAlea(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
//---------------------------------------------------------
function calculAlea() {
	//let calcul = new Object();
	let calcul = {};

	calcul.nb1 = nbreAlea(1, 20);
	calcul.nb2 = nbreAlea(1, 20);

	return calcul;
} //function calculAlea(){
//=========================================================================
