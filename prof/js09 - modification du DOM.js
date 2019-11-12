/*
 * modification du DOM: ajout, suppression, modification des éléments
 * (voir la documentation officielle pour plus d'infos)
 */

//---------------------------------------------------------
// * ajout, suppression d'éléments du DOM
//---------------------------------------------------------

// désignation d'un objet du DOM
let $maison = document.getElementById("divMaison");

// création et ajout d'un nouvel objet à la fin d'un container
let $salon = document.createElement("div"); //création
$salon.innerHTML = "Ceci est le salon"; //modification d'une propriété
$maison.appendChild($salon); // ajout à la fin du 'divMaison'
// maison: salon
let $cuisine = document.createElement("div"); //création
$cuisine.innerHTML = "Ceci est le cuisine"; //modification d'une propriété
$maison.appendChild($cuisine); // ajout à la fin du 'divMaison'
// maison: salon + cuisine

// création et ajout d'un nouvel objet avant un autre
let $salleAManger = document.createElement("div"); //création
$salleAManger.innerHTML = "Ceci est la salle à manger"; //modification d'une propriété
$maison.insertBefore($salleAManger, $cuisine); // ajout avant le div 'Cuisine'
// maison: salon + salleAManger + cuisine

// création et ajout d'un nouvel objet au début d'un container
let $hall = document.createElement("div"); //création
$hall.innerHTML = "Ceci est le hall d'entrée"; //modification d'une propriété
$maison.insertBefore($hall, $maison.firstChild); // ajout au début du 'divMaison'
// maison: hall + salon + salleAManger + cuisine

// suppression d'un objet du DOM
$cuisine.remove; // supprime le div 'Cuisine'
$maison.removeChild($maison.childNodes[0]); //supprime le premier noeud (hall)
// maison: salon + salleAManger

//---------------------------------------------------------
// * gestion des attributs
//---------------------------------------------------------
$maison.innerHTML = "Voici ma maison";

$maison.style.display = "none";
$maison.style.display = "";

$maison.classList.add("div-maison-rouge"); // ajoute la classe
$maison.classList.remove("div-maison-rouge"); // supprime la classe
$maison.classList.toggle("div-maison-select"); // si la classe existe elle est supprimée sinon elle est ajoutée

$maison.setAttribute("superficie", "600"); // ajoute un attribut
let superficie = $maison.getAttribute("superficie"); // recupère la valeur de l'attribut
$maison.removeAttribute("superficie"); // supprime l'attribut

//---------------------------------------------------------
// * navigation dans le DOM
//---------------------------------------------------------

// parents et enfants
console.log($maison.childNodes); // tableau de tous les noeuds enfants
console.log($maison.firstChild); // le premier noeud enfant
console.log($maison.childNodes[0]); // le premier noeud enfant
console.log($maison.lastChild); // le dernier noeud enfant

console.log($salon.parentNode); // le noeud parent

console.log($salleAManger.previousElementSibling); // le noeud précédent
console.log($salon.nextElementSibling); // le noeud suivant

//---------------------------------------------------------

/*
 ! Attention:
 * Node représente n'importe quel type de noeud
 *  Element est un noeud spécialisé : <p> <div>
 *  Text est un noeud spécialisé : le texte dans un div
 *  Document est un noeud spécialisé
 *  ...

  exemples:
  $el.children => liste des noeuds Element
  $el.childNodes => liste des noeuds de tout type
  $el.parentElement => le parent doit être un Element
  $el.parentNode => le parent peut être un Element ou un Document
*/

//---------------------------------------------------------
