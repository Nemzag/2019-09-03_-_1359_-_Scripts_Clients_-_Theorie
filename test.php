<!doctype html>
<html lang = "en" >
<head >
    <meta charset = "UTF-8" >
    <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge" >
    <title >Document</title >
</head >
<body >
<div class = "ui segment" >

    <h5 id = "titleH5Exercice19DeGaz" >
        <a href = "?#title-h2-table-of-contents" >Exercice 19 de Gaz :</a ></h5 >

    <!-- Ex2019_19_equipes_Gaz‑mên_Arifi.html -->
    <input type = "button"
           id = "inputReset_ex2019_19"
           value = "Réinitialiser"
           style = "width: 10em;" ><br ><br >

    <div id = "divComboBoxGroupePays_ex2019_19" ></div >

    <div id = "divBoutonCommencer_ex2019_19" >

        <hr id = "divHrBoutonCommencer_ex2019_19Hr" >

    </div >

    <div id = "divListeParticipant_ex2019_19"
         style = "display: none;" >

        <h5 id = "titleH5ListeDesParticipants" >
            <a href = "?#title-h2-table-of-contents" >Liste’s de’s participant’s&nbsp;:</a >
        </h5 >

        <p class = "ui message info" >Utiliser « CTRL + CLIQUE » pour sélectionner plusieurs participants.</p >

        <select name = "liste_de_selection_des_participants_ex2019_19"
                id = "listeDeSelectionDesParticipants_ex2019_19"
                title = "Sélecteur de pays."
                style = "height: 50em; width: 10em;"
                multiple
                class = "ui fluid dropdown" >

        </select >
        <script >$('#listeDeSelectionDesParticipants_ex2019_19')
                .dropdown();</script >
        <br > <input type = "button"
                     id = "inputBoutonAjouter_ex2019_19"
                     style = "width: 10em;"
                     value = "Ajouter" >

        <hr >
    </div >

    <input type = "button"
           id = "inputBoutonCommencer_ex2019_19"
           value = "Cômmêncer"
           style = "width: 10em;" >

    <div id = "divAffichageDesParticipantsActif_ex2019_19"
         style = "display:  none;" >

        <table class = "ex2019-19-perso" style = "width: auto;" >
            <thead >
            <tr >
                <th >Nom</th >
                <th >Pré‑nom</th >
                <th >Taille</th >
                <th >Poids</th >
                <th >Supprimer</th >
            </tr >
            </thead >
            <tbody id = "tBodyAffichageDesParticipants_ex2019_19" >

            </tbody >
        </table >
    </div >

    <!--<script src="Ex2019_19_equipes_Gaz‑mên_Arifi.js" ></script >-->
</div >

<script >/* Ex2019_19_equipes_Gaz‑mên_Arifi.js */
    "use strict";

    //----------------------------------------------------------------------------------------
    // init constantes…
    //----------------------------------------------------------------------------------------
    const RADIO_GROUPE_PAYS_EX2019_19 = document.getElementById("divComboBoxGroupePays_ex2019_19");
    const DIV_BUTTON_COMMENCER_EX2019_19 = document.getElementById("inputBoutonCommencer_ex2019_19");
    const DIV_LISTE_PARTICIPANT_PAR_PAYS_EX2019_19 = document.getElementById("divListeParticipant_ex2019_19");
    const LISTE_SELECTION_DES_PARTICIPANTS_EX2019_19 = document.getElementById("listeDeSelectionDesParticipants_ex2019_19");
    const INPUT_BOUTON_AJOUTER_EX2019_19 = document.getElementById("inputBoutonAjouter_ex2019_19");
    const DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF_EX2019_19 = document.getElementById("divAffichageDesParticipantsActif_ex2019_19");
    const TBODY_AFFICHAGE_DES_PARTICIPANTS_EX2019_19 = document.getElementById("tBodyAffichageDesParticipants_ex2019_19");
    const DIV_HR_BUTTON_COMMENCER_EX2019_19 = document.getElementById("divHrBoutonCommencer_ex2019_19Hr");
    const INPUT_RESET_EX2019_19 = document.getElementById("inputReset_ex2019_19");

    //----------------------------------------------------------------------------------------
    // Lancement fonction du listage des pays…
    //----------------------------------------------------------------------------------------
    listePaysAJAX_ex2019_19();

    //----------------------------------------------------------------------------------------
    // init évènements…
    //----------------------------------------------------------------------------------------
    DIV_BUTTON_COMMENCER_EX2019_19.addEventListener("click", listeSelective_ex2019_19);
    INPUT_RESET_EX2019_19.addEventListener("click", réinitialisé_ex2019_19);

    //----------------------------------------------------------------------------------------
    // init variables…
    //----------------------------------------------------------------------------------------

    // Variable’s global…
    let $listeSelectiveObjet = {listeSelective_ex2019_19};

    //----------------------------------------------------------------------------------------
    // Gestion de l'affichage des pays.
    //----------------------------------------------------------------------------------------

    function listePaysAJAX_ex2019_19() {

        INPUT_RESET_EX2019_19.setAttribute("disabled", "true");

        fetch("./php/2019-11-19_-_ex2019_19_liste_pays.php") //
            .then($reponse_ex2019_19 => $reponse_ex2019_19.json())
            .then($listePays_ex2019_19 => {
                let $texte_ex2019_19 = "";
                for (const PERSONNES_EX2019_19 of $listePays_ex2019_19) {
                    // OF pash IN.
                    // FOR "IN" ARRAY, FOR "OF" OBJECT.
                    // Transformation de objet ...lst ⇒ [...lst]
                    /*
					let $pays_ex2019_19 = '<input  type="radio" id="ex19Opt' + PERSONNES_EX2019_19.paysP + '" name="operator"  value="' + PERSONNES_EX2019_19.paysP + '" title="' + PERSONNES_EX2019_19.paysP + '"' + PERSONNES_EX2019_19.paysP + '.">' + PERSONNES_EX2019_19.paysP + '<br>';
					*/

                    let $pays_ex2019_19 = document.createElement("div");

                    let $comboBoxPays_ex2019_19 = document.createElement("input");
                    $comboBoxPays_ex2019_19.type = "checkbox";
                    $comboBoxPays_ex2019_19.value = PERSONNES_EX2019_19.paysP; // Ajout de une classe.
                    $comboBoxPays_ex2019_19.name = "check_box";
                    $comboBoxPays_ex2019_19.className = "check-box";
                    $comboBoxPays_ex2019_19.setAttribute("title", PERSONNES_EX2019_19.paysP);

                    let $comboBoxPaysNom_ex2019_19 = document.createElement("span");
                    $comboBoxPaysNom_ex2019_19.innerHTML = " " + PERSONNES_EX2019_19.paysP;

                    $pays_ex2019_19.appendChild($comboBoxPays_ex2019_19);
                    $pays_ex2019_19.append($comboBoxPaysNom_ex2019_19);

                    RADIO_GROUPE_PAYS_EX2019_19.appendChild($pays_ex2019_19);
                }
            });
    }

    /*
	// Si on coche une case Commencer apparaît.
	// <input type="button" id="ex19BoutonCommencer" value="Cômmêncer">
	// Je ne suis pash parvenu à creer une boucle if & checked en utilisant :
	// let $var = document.querySelectorAll('.checkbox').checked
	// let $checked = document.querySelectorAll('[name="check_box"]:checked');
	// if($checked == true) { … };

	//----------------------------------------------------------------------------------------
	// Gestion de l'affichage de commencer.
	//----------------------------------------------------------------------------------------

	afficherBouttonCommencer();

	function afficherBouttonCommencer() {

		let $ex19BoutonCommencer = document.createElement("input");

		$ex19BoutonCommencer.type = "button";
		$ex19BoutonCommencer.id = "ex19BoutonCommencer";
		$ex19BoutonCommencer.value = "Cômmêncer";

		let $ex19BoutonCommencerHr = document.createElement("hr");

		DIV_BUTTON_COMMENCER_EX2019_19.append($ex19BoutonCommencerHr);
		DIV_BUTTON_COMMENCER_EX2019_19.append($ex19BoutonCommencer);
	}
	*/

    //----------------------------------------------------------------------------------------
    // Réinitialisation du Combo‑Box de’s pays en cas de erreur de choix.
    //----------------------------------------------------------------------------------------
    function réinitialisé_ex2019_19() {

        DIV_LISTE_PARTICIPANT_PAR_PAYS_EX2019_19.setAttribute("style", "display: none;");
        RADIO_GROUPE_PAYS_EX2019_19.setAttribute("style", "display: initial");
        DIV_BUTTON_COMMENCER_EX2019_19.setAttribute("style", "display: initial;");
        DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF_EX2019_19.setAttribute("style", "display: none;");

        INPUT_RESET_EX2019_19.disabled = true;
    }

    //----------------------------------------------------------------------------------------
    // Extraction des pays coché.
    //----------------------------------------------------------------------------------------

    function listeSelective_ex2019_19() {

        DIV_LISTE_PARTICIPANT_PAR_PAYS_EX2019_19.setAttribute("style", "display: initial;");
        DIV_BUTTON_COMMENCER_EX2019_19.setAttribute("style", "display: none;");
        RADIO_GROUPE_PAYS_EX2019_19.setAttribute("style", "display: none;");
        DIV_HR_BUTTON_COMMENCER_EX2019_19.setAttribute("style", "display: none;");

        INPUT_RESET_EX2019_19.disabled = false;

        let $listePaysCoché_ex2019_19 = document
            .getElementById("divComboBoxGroupePays_ex2019_19")
            .getElementsByClassName("check-box");

        // console.log($listePaysCoché_ex2019_19); // Fonctionne.

        $listePaysCoché_ex2019_19 = [...$listePaysCoché_ex2019_19].filter($el => $el.checked);

        // console.log($listePaysCoché_ex2019_19); // Fonctionne.

        for (let $paysFilter_ex2019_19 of $listePaysCoché_ex2019_19) {

            fetch("./php/2019-11-19_-_ex2019_19_liste_personne_un_pays.php?pays=" + $paysFilter_ex2019_19.value)
                .then($reponse_ex2019_19 => $reponse_ex2019_19.json())
                .then($listePersonneParPays_ex2019_19 => {

                    // DIV_LISTE_PARTICIPANT_PAR_PAYS_EX2019_19.innerHTML = "";

                    //console.log("pays :", pays);
                    let $paragraphParticipant_ex2019_19 = document.createElement("p");
                    $paragraphParticipant_ex2019_19.classList.add("paragraph-participant");

                    /*
					let $selectionParticipants_ex2019_19 = document.createElement("select");
					$selectionParticipants_ex2019_19.classList.add("selection-participants");
					$selectionParticipants_ex2019_19.setAttribute("multiple", "");
					$selectionParticipants_ex2019_19.setAttribute("style", "height:50em;");
					*/

                    for (const PERSONNAGE_PAR_PAYS_EX2019_19 of $listePersonneParPays_ex2019_19) {

                        // console.log("Personnage :", PERSONNAGE_PAR_PAYS_EX2019_19);

                        let $optionDeSelection_ex2019_19 = document.createElement("option");
                        $optionDeSelection_ex2019_19.value = PERSONNAGE_PAR_PAYS_EX2019_19.nomP;
                        $optionDeSelection_ex2019_19.className = "option-participants";

                        let $nomsParticipants_ex2019_19 = document.createElement("span");
                        $nomsParticipants_ex2019_19.innerHTML = PERSONNAGE_PAR_PAYS_EX2019_19.nomP;
                        $nomsParticipants_ex2019_19.classList.add("noms-participants");

                        /*
						$paragraphParticipant_ex2019_19.appendChild($selectionParticipants_ex2019_19);
						$selectionParticipants_ex2019_19.appendChild($optionDeSelection_ex2019_19);
						 */
                        $optionDeSelection_ex2019_19.appendChild($nomsParticipants_ex2019_19);

                        LISTE_SELECTION_DES_PARTICIPANTS_EX2019_19.appendChild($optionDeSelection_ex2019_19);
                    }

                    INPUT_BOUTON_AJOUTER_EX2019_19.addEventListener("click", listeDétaillé_ex2019_19);
                });
        }
    }

    function listeDétaillé_ex2019_19() {
        // gestion de’s participants
        // les trois petit point déstructure le résultat / liste,
        // en élémênt et le transforme en tableau car on utilise [].

        DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF_EX2019_19.setAttribute("style", "display: initial;");

        let $listeParticipantsCoché_ex2019_19 = $listeSelectiveObjet
            .getElementsByClassName("option-participants");

        console.log("$listeParticipantsCoché_ex2019_19");
        console.log($listeParticipantsCoché_ex2019_19); // Fonctionne.

        $listeParticipantsCoché_ex2019_19 = [...$listeParticipantsCoché_ex2019_19].filter($el => $el.selected);

        // console.log($listeParticipantsCoché_ex2019_19); // Fonctionne.

        for (let $participants_actif_ex2019_19 of $listeParticipantsCoché_ex2019_19) {

            let $trParticipantActif_ex2019_19 = document.createElement("tr");
            $trParticipantActif_ex2019_19.classList.add("noms-participants-actif");

            let $nomsParticipantsActif_ex2019_19 = document.createElement("td");
            $nomsParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.nameP;

            let $prenomsParticipantsActif_ex2019_19 = document.createElement("td");
            $prenomsParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.PrenomP;

            let $tailleParticipantsActif_ex2019_19 = document.createElement("td");
            $tailleParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.tailleP;

            let $masseParticipantsActif_ex2019_19 = document.createElement("td");
            $masseParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.masseP;

            let $supprimerPartipant_ex2019_19 = document.createElement("input");
            $supprimerPartipant_ex2019_19.type = "button";
            $supprimerPartipant_ex2019_19.value = "Supprimer";
            $supprimerPartipant_ex2019_19.id = $participants_actif_ex2019_19.idP;

            let $supprimerParticipantsActif_ex2019_19 = document.createElement("td");
            $supprimerParticipantsActif_ex2019_19.appendChild($supprimerPartipant_ex2019_19);

            let $constructionDeslignesDuTableau_ex2019_19 = $trParticipantActif_ex2019_19;

            // Création de TableRow
            $trParticipantActif_ex2019_19.appendChild($nomsParticipantsActif_ex2019_19);
            $trParticipantActif_ex2019_19.appendChild($prenomsParticipantsActif_ex2019_19);
            $trParticipantActif_ex2019_19.appendChild($tailleParticipantsActif_ex2019_19);
            $trParticipantActif_ex2019_19.appendChild($masseParticipantsActif_ex2019_19);
            $trParticipantActif_ex2019_19.appendChild($supprimerParticipantsActif_ex2019_19);

            /*
			// Création de’s Cellule’s data.
			$nomsParticipantsActif_ex2019_19.append($prenomsParticipantsActif_ex2019_19);
			$prenomsParticipantsActif_ex2019_19.append($tailleParticipantsActif_ex2019_19);
			$tailleParticipantsActif_ex2019_19.append($masseParticipantsActif_ex2019_19);
			$masseParticipantsActif_ex2019_19.append($supprimerPartipant_ex2019_19);
			 */

            TBODY_AFFICHAGE_DES_PARTICIPANTS_EX2019_19.appendChild($constructionDeslignesDuTableau_ex2019_19);
        }
    }

    /*
	function listeDétaillé_ex2019_19() {

		let $listeParticipantsCoché_ex2019_19 = document.getElementById("divListeParticipant_ex2019_19")
			.getElementsByClassName("option-participants");

		// console.log($listeParticipantsCoché_ex2019_19); // Fonctionne.

		$listeParticipantsCoché_ex2019_19 = [...$listeParticipantsCoché_ex2019_19].filter($el => $el.selected);

		console.log($listeParticipantsCoché_ex2019_19); // Fonctionne.

		for (const $participants_actif_ex2019_19 of $listeParticipantsCoché_ex2019_19) {

			let $trParticipantActif_ex2019_19 = document.createElement("tr");
			$trParticipantActif_ex2019_19.classList.add("noms-participants-actif");

			let $nomsParticipantsActif_ex2019_19 = document.createElement("td");
			$nomsParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.innerText;

			let $prenomsParticipantsActif_ex2019_19 = document.createElement("td");
			$nomsParticipantsActif_ex2019_19.innerHTML = $participants_actif_ex2019_19.innerText;

			let $sautDeLigne_ex2019_19 = document.createElement("br");

			let $supprimerPartipant_ex2019_19 = document.createElement("input");
			$supprimerPartipant_ex2019_19.type ="button";
			$supprimerPartipant_ex2019_19.value = "Supprimer";
			$supprimerPartipant_ex2019_19.id = $participants_actif_ex2019_19.idP;

			TBODY_AFFICHAGE_DES_PARTICIPANTS_EX2019_19.appendChild($nomsParticipantsActif_ex2019_19);
		}
		*/
</script >
</body >
</html >