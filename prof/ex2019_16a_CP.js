//===========================================================================
const $cboCP = document.getElementById("cboCP");
const $cboLoc = document.getElementById("cboLoc");
const $divLoc = document.getElementById("divLoc");

$cboCP.addEventListener("change", majCboLoc);

let $optVide = document.createElement("option");
$optVide.innerHTML = "Choisissez...";
$optVide.value = "-1";

majCboCP();

//---------------------------------------------------------

function majCboCP() {
	fetch("./listeTousLesCP.php") // requête AJAX
		.then(rep => rep.json()) // transforme la réponse (texte) en tableau d'objets JSON
		.then(listeCP => {
			// nettoyage du <select>
			$cboCP.innerHTML = "";
			$cboCP.appendChild($optVide.cloneNode(true));

			// parcours du tableau d'objets
			for (let cp of listeCP) {
				// création de l'<option> + paramètres
				let $optCP = document.createElement("option");
				$optCP.innerHTML = cp.CP;
				$optCP.value = cp.CP;
				// ajout de l'<option> au <select>
				$cboCP.appendChild($optCP);
			}

			//$cboLoc.setAttribute("disabled", "");
			//$cboLoc.hidden = true;
			$divLoc.hidden = true;
		});
}

function majCboLoc() {
	$cboLoc.innerHTML = "";
	$cboLoc.appendChild($optVide.cloneNode(true));
	//$cboLoc.setAttribute("disabled", "");
	//$cboLoc.hidden = true;
	$divLoc.hidden = true;

	let cp = $cboCP.value; // la valeur du CP choisi
	if (cp < 0) return;

	fetch("./listeCommunesPourUnCP.php?cp=" + cp)
		.then(rep => rep.json())
		.then(listeCommunes => {
			if (listeCommunes.length == 1) {
				let $optCommune = document.createElement("option");
				$optCommune.innerHTML = listeCommunes[0].Commune;

				$cboLoc.innerHTML = "";
				$cboLoc.appendChild($optCommune);
			} else {
				for (let commune of listeCommunes) {
					let $optCommune = document.createElement("option");
					$optCommune.innerHTML = commune.Commune;

					$cboLoc.appendChild($optCommune);
				}
			}
		});

	//$cboLoc.removeAttribute("disabled");
	//$cboLoc.hidden = false;
	$divLoc.hidden = false;
}

//===========================================================================
