//=========================================================================
const $txtPays = document.getElementById("txtPays");
const $divListePays = document.getElementById("divListePays");
const $btnAjoutPays = document.getElementById("btnAjoutPays");

$txtPays.addEventListener("input", affListePays);
$btnAjoutPays.addEventListener("click", ajoutPays);

//-------------------------------------------------------
function affListePays() {
	//console.log("Liste des pays");
	let filtrePays = $txtPays.value.trim();
	//console.log("filtrePays :", filtrePays);

	fetch("./sql/listePays.php?filtrePays=" + filtrePays) //
		.then(rep => rep.json())
		.then(listePays => {
			//console.log("listePays :", listePays);
			$divListePays.innerHTML = "";
			for (const pays of listePays) {
				//console.log("pays :", pays);
				let $pPays = document.createElement("p");
				$pPays.classList.add("p-pays");

				let $chkPays = document.createElement("input");
				$chkPays.type = "checkbox";
				$chkPays.classList.add("chk-pays");

				let $nomPays = document.createElement("span");
				$nomPays.innerHTML = pays.nomFrP;
				$nomPays.classList.add("nom-pays");

				$pPays.appendChild($chkPays);
				$pPays.appendChild($nomPays);

				$divListePays.appendChild($pPays);
			}
		});
}

function ajoutPays() {
	//console.log("ajout pays");
	for (const pPays of $divListePays.getElementsByClassName("p-pays")) {
		if (pPays.getElementsByClassName("chk-pays")[0].checked) {
			console.log(pPays.getElementsByClassName("nom-pays")[0].innerHTML);
		}
	}
}

//=========================================================================
