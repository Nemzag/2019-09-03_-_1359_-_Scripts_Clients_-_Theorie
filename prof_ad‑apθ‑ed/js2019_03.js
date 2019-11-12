"use strict";
//-------------------------------------
// code appelé automatiquement
//-------------------------------------

document.getElementById("btnSaluer").addEventListener("click", saluer);

//-------------------------------------
// outils
//-------------------------------------
function saluer() {
	const $txtNom = document.getElementById("txtNom");
	//let nom = document.getElementById("txtNom").value;
	let nom = $txtNom.value;

	if (nom === "") {
		window.alert("Salut l'inconnu");
	} else {
		window.alert("Bonjour " + nom);
	}

	//document.getElementById("txtNom").value = "";
	$txtNom.value = "";
	//document.getElementById("txtNom").focus();
	$txtNom.focus();
}
