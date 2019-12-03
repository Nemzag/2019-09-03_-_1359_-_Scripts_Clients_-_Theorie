"use strict";

//---------------------------------------------------------
// init variables…
//---------------------------------------------------------
const EX19_RADIO_GROUPE_PAYS = document.getElementById("ex19DivCboGroupePays");
const EX19_DIV_BUTTON_COMMENCER = document.getElementById("ex19InputBoutonCommencer");
const EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS = document.getElementById("ex19DivListeParticipant");
const EX19_LISTE_SELECTION_DES_PARTICIPANTS = document.getElementById("ex19ListeDeSelectionDesParticipants");
const EX19_INPUT_BOUTON_AJOUTER = document.getElementById("ex19InputBoutonAjouter");
const EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF = document.getElementById("ex19DivAffichageDesParticipantsActif");
const EX19_TBODY_AFFICHAGE_DES_PARTICIPANTS = document.getElementById("ex19TBodyAffichageDesParticipants");
const EX19_DIV_BUTTON_COMMENCER_HR = document.getElementById("ex19DivButtonCommencerHr");
const EX19_INPUT_RESET = document.getElementById("ex19InputReset");

//---------------------------------------------------------
// Lancement fonction du listage des pays…
//---------------------------------------------------------
listePaysAJAX();

//---------------------------------------------------------
// init évènements….
//---------------------------------------------------------
EX19_DIV_BUTTON_COMMENCER.addEventListener("click", listeSelective);
EX19_INPUT_RESET.addEventListener("click", réinitialisé);

//---------------------------------------------------------
// Gestion de l'affichage des pays.
//---------------------------------------------------------

function listePaysAJAX() {

    EX19_INPUT_RESET.setAttribute("disabled", "true");

    fetch("./php/2019-11-19_-_ex19_liste_pays.php") //
        .then($reponse => $reponse.json())
        .then($listePays => {
            let $texte = "";
            for (const PERSONNES of $listePays) {
                // OF pash IN.
                // FOR "IN" ARRAY, FOR "OF" OBJECT.
                // Transformation de objet ...lst ⇒ [...lst]
                /*
                let $pays = '<input  type="radio" id="ex19Opt' + PERSONNES.paysP + '" name="operator"  value="' + PERSONNES.paysP + '" title="' + PERSONNES.paysP + '"' + PERSONNES.paysP + '.">' + PERSONNES.paysP + '<br>';
                */

                let $pays = document.createElement("div");

                let $cBoPays = document.createElement("input");
                $cBoPays.type = "checkbox";
                $cBoPays.value = PERSONNES.paysP; // Ajout de une classe.
                $cBoPays.name = "check_box";
                $cBoPays.className = "check-box";
                $cBoPays.setAttribute("title", PERSONNES.paysP);

                let $cBoPaysNom = document.createElement("span");
                $cBoPaysNom.innerHTML = " " + PERSONNES.paysP;

                $pays.appendChild($cBoPays);
                $pays.append($cBoPaysNom);

                EX19_RADIO_GROUPE_PAYS.appendChild($pays);
            }
        });
}

/*
// Si on coche un case Commencer apparaît.
// <input type="button" id="ex19BoutonCommencer" value="Cômmêncer">
// Je ne suis pash parvenu à creer une boucle if & checked en utilisant :
// let $var = document.querySelectorAll('.checkbox').checked
// let $checked = document.querySelectorAll('[name="check_box"]:checked');
// if($checked == true) { … };

//---------------------------------------------------------
// Gestion de l'affichage de commencer.
//---------------------------------------------------------

afficherBouttonCommencer();

function afficherBouttonCommencer() {

    let $ex19BoutonCommencer = document.createElement("input");

    $ex19BoutonCommencer.type = "button";
    $ex19BoutonCommencer.id = "ex19BoutonCommencer";
    $ex19BoutonCommencer.value = "Cômmêncer";

    let $ex19BoutonCommencerHr = document.createElement("hr");

    EX19_DIV_BUTTON_COMMENCER.append($ex19BoutonCommencerHr);
    EX19_DIV_BUTTON_COMMENCER.append($ex19BoutonCommencer);
}
*/

//---------------------------------------------------------
// Réinitialisation du Combo‑Box de’s pays en cas de erreur de choix.
//---------------------------------------------------------
function réinitialisé() {
    EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS.setAttribute("style", "display: none;");
    EX19_RADIO_GROUPE_PAYS.setAttribute("style", "display: initial");
    EX19_DIV_BUTTON_COMMENCER.setAttribute("style", "display: initial;");
    EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF.setAttribute("style", "display: none;");
    EX19_INPUT_RESET.disabled =  true;
}

//---------------------------------------------------------
// Extraction des pays coché.
//---------------------------------------------------------


function listeSelective() {

    EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS.setAttribute("style", "display: initial;");
    EX19_DIV_BUTTON_COMMENCER.setAttribute("style", "display: none;");
    EX19_RADIO_GROUPE_PAYS.setAttribute("style", "display: none;");
    EX19_DIV_BUTTON_COMMENCER_HR.setAttribute("style", "display: none;");
    EX19_INPUT_RESET.disabled =  false;

    let $listePaysCoché = document.getElementById("ex19DivCboGroupePays")
        .getElementsByClassName("check-box");

    // console.log($listePaysCoché); // Fonctionne.

    $listePaysCoché = [...$listePaysCoché].filter($el => $el.checked);

    // console.log($listePaysCoché); // Fonctionne.

    for (let $pays of $listePaysCoché) {

        fetch("./php/2019-11-19_-_ex19_liste_personne_un_pays.php?pays=" + $pays.value)
            .then($reponse => $reponse.json())
            .then($listePersonneParPays => {

                // EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS.innerHTML = "";

                //console.log("pays :", pays);
                let $paragraphParticipant = document.createElement("p");
                $paragraphParticipant.classList.add("paragraph-participant");

                /*
                let $selectionParticipants = document.createElement("select");
                $selectionParticipants.classList.add("selection-participants");
                $selectionParticipants.setAttribute("multiple", "");
                $selectionParticipants.setAttribute("style", "height:50em;");
                */

                for (const EX19_PERSONNAGE_PAR_PAYS of $listePersonneParPays) {

                    // console.log("Personnage :", EX19_PERSONNAGE_PAR_PAYS);

                    let $optionDeSelection = document.createElement("option");
                    $optionDeSelection.value = EX19_PERSONNAGE_PAR_PAYS.nomP;
                    $optionDeSelection.className = "option-participants";

                    let $nomsParticipants = document.createElement("span");
                    $nomsParticipants.innerHTML = EX19_PERSONNAGE_PAR_PAYS.nomP;
                    $nomsParticipants.classList.add("noms-participants");

                    /*
                    $paragraphParticipant.appendChild($selectionParticipants);
                    $selectionParticipants.appendChild($optionDeSelection);
                     */
                    $optionDeSelection.appendChild($nomsParticipants);

                    EX19_LISTE_SELECTION_DES_PARTICIPANTS.appendChild($optionDeSelection);
                }

                EX19_INPUT_BOUTON_AJOUTER.addEventListener("click", listeDétaillé);

                function listeDétaillé() {

                    EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF.setAttribute("style", "display: inital;");

                    let $listeParticipantsCoché = document.getElementById("ex19DivListeParticipant")
                        .getElementsByClassName("option-participants");

                    // console.log($listeParticipantsCoché); // Fonctionne.

                    $listeParticipantsCoché = [...$listeParticipantsCoché].filter($el => $el.selected);

                    console.log($listeParticipantsCoché); // Fonctionne.

                    for (const PARTICIPANTS_ACTIF of $listeParticipantsCoché) {

                        let $trParticipantActif = document.createElement("tr");
                        $trParticipantActif.classList.add("noms-participants-actif");

                        let $nomsParticipantsActif = document.createElement("td");
                        $nomsParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.nameP;

                        let $prenomsParticipantsActif = document.createElement("td");
                        $prenomsParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.PrenomP;

                        let $tailleParticipantsActif = document.createElement("td");
                        $tailleParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.tailleP;

                        let $masseParticipantsActif = document.createElement("td");
                        $masseParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.masseP;

                        let $SupprimerPartipant = document.createElement("input");
                        $SupprimerPartipant.type = "button";
                        $SupprimerPartipant.value = "Supprimer";
                        $SupprimerPartipant.id = PARTICIPANTS_ACTIF.idP;

                        let $supprimerParticipantsActif = document.createElement("td");
                        $supprimerParticipantsActif.appendChild($SupprimerPartipant);

                        let $ConstructionDeslignesDuTableau = $trParticipantActif;

                        // Création de TableRow
                        $trParticipantActif.appendChild($nomsParticipantsActif);
                        $trParticipantActif.appendChild($prenomsParticipantsActif);
                        $trParticipantActif.appendChild($tailleParticipantsActif);
                        $trParticipantActif.appendChild($masseParticipantsActif);
                        $trParticipantActif.appendChild($supprimerParticipantsActif);

                        /*
                        // Création de’s Cellule’s data.
                        $nomsParticipantsActif.append($prenomsParticipantsActif);
                        $prenomsParticipantsActif.append($tailleParticipantsActif);
                        $tailleParticipantsActif.append($masseParticipantsActif);
                        $masseParticipantsActif.append($SupprimerPartipant);
                         */

                        EX19_TBODY_AFFICHAGE_DES_PARTICIPANTS.appendChild($ConstructionDeslignesDuTableau);
                    }
                }
            });
    }
}

/*
function listeDétaillé() {

    let $listeParticipantsCoché = document.getElementById("ex19DivListeParticipant")
        .getElementsByClassName("option-participants");

    // console.log($listeParticipantsCoché); // Fonctionne.

    $listeParticipantsCoché = [...$listeParticipantsCoché].filter($el => $el.selected);

    console.log($listeParticipantsCoché); // Fonctionne.

    for (const PARTICIPANTS_ACTIF of $listeParticipantsCoché) {

        let $trParticipantActif = document.createElement("tr");
        $trParticipantActif.classList.add("noms-participants-actif");

        let $nomsParticipantsActif = document.createElement("td");
        $nomsParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.innerText;

        let $prenomsParticipantsActif = document.createElement("td");
        $nomsParticipantsActif.innerHTML = PARTICIPANTS_ACTIF.innerText;

        let $sautDeLigne = document.createElement("br");

        let $SupprimerPartipant = document.createElement("input");
        $SupprimerPartipant.type ="button";
        $SupprimerPartipant.value = "Supprimer";
        $SupprimerPartipant.id = PARTICIPANTS_ACTIF.idP;

        EX19_TBODY_AFFICHAGE_DES_PARTICIPANTS.appendChild($nomsParticipantsActif);
    }
    */