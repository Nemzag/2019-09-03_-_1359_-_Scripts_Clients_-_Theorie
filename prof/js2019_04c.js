"use strict";
//-------------------------------------
// code appelé automatiquement
//-------------------------------------
const $txtNbre1 = document.getElementById("txtNbre1");
const $txtNbre2 = document.getElementById("txtNbre2");
const $txtResult = document.getElementById("txtResult");
const $cboOperator = document.getElementById("cboOperator");

$txtNbre1.addEventListener("keyup", calculer);
$txtNbre2.addEventListener("keyup", calculer);
$cboOperator.addEventListener("change", calculer);

//-------------------------------------
// outils
//-------------------------------------
function calculer() {
	let nb1 = parseInt($txtNbre1.value);
	let nb2 = parseInt($txtNbre2.value);
	let result;

	switch ($cboOperator.value) {
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
