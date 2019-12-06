//=========================================================================
let $btnNouvCalc = document.getElementById("btnNouvCalc");
let $btnVerif = document.getElementById("btnVerif");

let $txtNb1 = document.getElementById("txtNb1");
let $spanOp = document.getElementById("spanOp");
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
	$spanOp.innerHTML = c.op;
	$txtNb2.value = c.nb2;
	$txtRep.value = "";
	$txtRep.setAttribute("rep", c.rep);

	$txtRep.removeAttribute("readonly");
	$txtRep.classList = "";
	$txtRep.focus();

	$btnVerif.removeAttribute("disabled");
}
//---------------------------------------------------------
function verifCalcul() {
	$btnVerif.setAttribute("disabled", "");
	$txtRep.setAttribute("readonly", "");

	if (Number($txtRep.value) === Number($txtRep.getAttribute("rep"))) {
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
