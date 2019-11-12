"use strict";

valeurBoutonsRadio("operator");

//-------------------------------------
// code appelé automatiquement
//-------------------------------------
const $txtNbre1 = document.getElementById("txtNbre1");
const $txtNbre2 = document.getElementById("txtNbre2");
const $txtResult = document.getElementById("txtResult");
//const $optOpPlus = document.getElementById("optOp+");
//const $optOpMoins = document.getElementById("optOp-");
//const $optOpMult = document.getElementById("optOp*");
//const $optOpDiv = document.getElementById("optOp/");
const $grpOp = document.getElementById("grpOp");

$txtNbre1.addEventListener("keyup", calculer);
$txtNbre2.addEventListener("keyup", calculer);
//$optOpPlus.addEventListener("click", calculer);
//$optOpMoins.addEventListener("click", calculer);
//$optOpMult.addEventListener("click", calculer);
//$optOpDiv.addEventListener("click", calculer);
$grpOp.addEventListener("click", calculer);

//-------------------------------------
// outils
//-------------------------------------
function calculer() {
	let nb1 = parseInt($txtNbre1.value);
	let nb2 = parseInt($txtNbre2.value);
	let result;

	switch (valeurBoutonsRadio("operator")) {
		case "+":
			result = nb1 + nb2;
			break;
		case "-":
			result = nb1 - nb2;
			break;
		case "*":
			result = nb1 * nb2;
			break;
		case "/":
			result = nb1 / nb2;
			break;
		default:
			break;
	}

	$txtResult.value = result;
}

function valeurBoutonsRadio(grpBoutonsRadio) {
	let tabBoutonsRadio = document.getElementsByName(grpBoutonsRadio);

	for (let i = 0; i < tabBoutonsRadio.length; i++) {
		if (tabBoutonsRadio[i].checked) {
			return tabBoutonsRadio[i].value;
		}
	}

	return null;
}
