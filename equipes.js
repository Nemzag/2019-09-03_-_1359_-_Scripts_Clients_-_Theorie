"use strict";
//---------------------------------------------------------
// init variables, évènements...
//---------------------------------------------------------
const $divPays = document.getElementById("divPays");
const $btnCommencer = document.getElementById("btnCommencer");
const $cboPers = document.getElementById("cboPers");
const $btnAjouter = document.getElementById("btnAjouter");
const $divPart = document.getElementById("divPart");

const $spanMassetotale = document.getElementById("spanMassetotale");

$btnCommencer.addEventListener("click", commencerChoix);
$btnAjouter.addEventListener("click", ajouterPart);

let lstPays = [];
constructionListePays();
//console.log("lstPays :", lstPays);

let lstPers = [];

let masseTotale = 0;

//---------------------------------------------------------
// gestion liste pays...
//---------------------------------------------------------
function constructionListePays() {
	fetch("./listePays.php")
		.then(rep => rep.json())
		.then(listePays => {
			$divPays.innerHTML = "";
			for (const pays of listePays.sort((a, b) =>
				a.paysP.localeCompare(b.paysP)
			)) {
				lstPays.push(pays.paysP); //pour utilisation future

				let $pPays = document.createElement("p");
				$pPays.classList.add("p-pays");

				let $chkPays = document.createElement("input");
				$chkPays.value = pays.paysP;
				$chkPays.type = "checkbox";
				$chkPays.classList.add("chk-pays");

				let $nomPays = document.createElement("span");
				$nomPays.innerHTML = pays.paysP;
				$nomPays.classList.add("nom-pays");

				$pPays.appendChild($chkPays);
				$pPays.appendChild($nomPays);

				$divPays.appendChild($pPays);
			}
		});
}

//---------------------------------------------------------
// gestion participants...
//---------------------------------------------------------
function constructionListePart() {
	$cboPers.innerHTML = "";
	lstPers = [];
	[...$divPays.getElementsByClassName("chk-pays")]
		.filter(el => el.checked)
		//		.sort((a, b) => a.paysP.localeCompare(b.paysP))
		.forEach(pays => {
			fetch("./listePersUnPays.php?pays=" + pays.value)
				.then(rep => rep.json())
				.then(listePers => {
					for (const pers of listePers.sort((x, y) =>
						x.nomP.localeCompare(y.nomP)
					)) {
						pers.dispo = true;
						pers.IMC = pers.masseP / Math.pow(pers.tailleP / 100.0, 2);
						lstPers[pers.idP] = pers;

						let $optPers = document.createElement("option");
						$optPers.innerHTML = `${pers.nomP} ${pers.prenomP}`;
						$optPers.value = pers.idP;
						$cboPers.appendChild($optPers);
					}
				});
		});
	console.log("lstPers :", lstPers);
}

function ajouterPart() {
	let pers = lstPers[$cboPers.value];
	let $pPart = document.createElement("p");

	let $btnSuppPart = document.createElement("button");
	$btnSuppPart.innerHTML = "-";
	$btnSuppPart.addEventListener("click", supprimerPart);

	let $txtPart = document.createTextNode(
		`${pers.idP} --> ${pers.nomP} ${pers.prenomP} (${pers.masseP})`
	);

	$pPart.appendChild($btnSuppPart);
	$pPart.appendChild($txtPart);
	$pPart.classList.add("Lg-Part");
	$pPart.setAttribute("idP", pers.idP);
	$pPart.setAttribute("masseP", pers.masseP);

	masseTotale += Number(pers.masseP);
	$spanMassetotale.innerHTML = masseTotale;

	$divPart.appendChild($pPart);
}

function supprimerPart() {
	let $li = this.closest(".Lg-Part");

	masseTotale -= $li.getAttribute("masseP");
	$spanMassetotale.innerHTML = masseTotale;

	$li.remove();
}

//---------------------------------------------------------
// gestion états(phases)...
//---------------------------------------------------------
function commencerChoix() {
	//désactiver les éléments du cadre choix Pays

	[...$divPays.getElementsByClassName("chk-pays")].forEach(
		el => (el.disabled = true)
	);
	$btnCommencer.disabled = true;

	constructionListePart();
}
