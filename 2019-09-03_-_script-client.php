<?php
?>

<!DOCTYPE html>

<!--
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 2019-09-10
 * Time: 13:17:32
-->
<html lang = "fr">

<head>

    <!-- Meta Information's -->
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv = "Content-Type"
          content = "text/html;">
    <meta name = "description"
          content = "Personnal website">
    <meta name = "subject"
          content = "Web Dewelopmenth">
    <meta name = "keywords"
          content = "">
    <meta name = "author"
          content = "Gazmen Arifi / Газмен Арифи">
    <meta name = "birthday"
          content = "1979-09-30"
          scheme = "YYYY-MM-DD">
    <meta name = "reply-to"
          content = "???????@???????.com">
    <meta name = "copyright"
          content = "Gazmen Arifi / Газмен Арифи">
    <meta name = "date"
          content = "2019-09-15"
          scheme = "YYYY-MM-DD">
    <meta name = "hour"
          content = "21:41:39"
          scheme = "HH:mm">
    <meta name = "generator"
          content = "PhpStorm 2018.??.??">

    <!-- Title -->
    <title>Ʃkri‑pθ‑Kli‑ênθ</title>

    <!-- Link's favicon -->
    <link rel = "icon"
          href = "assets/logo/TAOTRJÃZË_BV.png">

    <!-- Link's third party stylesheet  -->

    <!-- Prism -->
    <link rel = "stylesheet"
          href = "assets/css/prism/prism.css">

    <!-- TocBot -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.8.0/tocbot.css">-->
    <link rel = "stylesheet"
          href = "assets/css/tocbot/tocbot.css">
    <!-- TocBot Personal -->

    <link rel = "stylesheet"
          href = "assets/css/Nemzag/nemzag-heading-numerotation.css">

    <!-- Prettify -->
    <link rel = "stylesheet"
          href = "assets/css/prettify/prettify.css"> <!-- Syntaxic coloration on result -->

    <!-- BootStrap -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css"> -->

    <!-- Semantic -->
    <link rel = "stylesheet"
          href = "assets/PrameVorgs/semantic-ui-css-master/semantic.min.css">

    <!-- Link’s TableDatas stylesheet -->
    <link rel = "stylesheet"
          href = "assets/js/data_tables/DataTables-1.10.18/css/jquery.dataTables.min.css">

    <link rel = "stylesheet"
          href = "assets/js/data_tables/DataTables-1.10.18/css/dataTables.semanticui.min.css">

    <!-- Link's personal stylesheet -->
    <!-- <link rel="stylesheet" href="assets/css/Nemzag/base.css"> -->
    <link rel = "stylesheet"
          href = "assets/css/Nemzag/ueb.css">
    <!-- <link rel="stylesheet" href="assets/css/Nemzag/debug.css"> -->

    <!-- Page own particular styles -->
    <style>
        body {
            font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            color: rgba(0, 0, 0, .87);

            overflow-x: visible;
        }

        /* Header */
        h1 {
            font-size: 32px;
        }

        h2 {
            font-size: 29px;
        }

        h3 {
            font-size: 26px;
        }

        h4 {
            font-size: 23px;
        }

        h5 {
            font-size: 20px;
        }

        h6 {
            font-size: 17px;
        }

        p, code, kbd, samp, code[class*="language-"], pre[class*="language-"], .ui.segment, .ui.segments .segment {
            font-size: 14px;
        }

        img {
            border: 1px solid hsla(0, 0%, 0%, 0.50);
        }

        .repOK {
	        background-color: green;
	        color: white;
        }

        .repPasOK {
	        background-color: red;
	        color: white;
        }

        .ex10Operateur,
        .ex09-span-options {
	        width: 1em;
	        text-align: center;
	        display: inline-block;
        }

    </style>

    <!-- Jquery -->
    <script src = "assets/js/jquery/jquery.js"></script>

    <!-- VueJS -->
    <script src = "assets/js/vue-js/vue.min.js"></script>
    <script src = "assets/js/vue-js/vue-js_2.x-filters.min.js"></script>

</head>

<body id = "body"
      class = "js-toc-content">

<header>
    <h1 id = "title-h1-??">Script‑Client<br>Ʃkri‑pθ‑kli‑ênθ</h1>
</header>

<main id = "main"
      class = "ui container">

    <article id = "article">

        <section id = "#section-table-of-contents">
            <fieldset>
                <legend><h2 id = "title-h2-table-of-contents">
                        <a href = "?#title-h2-table-of-contents">Table de's matière's :</a>
                    </h2></legend>

                <div id = "js-toc"
                     class = "js-toc"></div>
            </fieldset>
        </section>

        <!-- BEGIN PRINCIPAL CONTENT -->

        <section id = "section-principal">

            <section>

                <fieldset>
                    <legend><h2 id = "titleH2TheorieDeJavaScriptServais">
                            <a href = "?#title-h2-table-of-contents">Théôrie de JavaScript pêr le professeur Servais Dominique :</a>
                        </h2></legend>

                    <div class = "ui segment">
                        <h3 id = "titleH32019y09m10dJs01Variables">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑10 ‒ js01&nbsp;-&nbsp;les variables.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// 2019‑09‑10 ‒ js01 - les variables.js :
/* 2019‑09‑10 */

/*
 * attention à la portée des variables
 * toujours déclarer les variables avec let ou const
 * ajouter "use strict"; en début de fichier
 */

function initVar() {
	$a1 = $11;
	// ! déclaration GLOBALE !!!

	var $b1 = 21;
	// déclaration locale

	let $c1 = 31;
	// déclaration locale
}

initVar();
console.log("Variable $a1 :", $a1);
// console.log("Variable $b1 :", $b1);
// ! erreur car $b1 n'est valide que dans initVar()

// console.log("Variable $c1 :", $c1);
// ! erreur car $c1 n'est valide que dans initVar()

//----------------------------------------------------------------------------------------

if (1) {
  $a2 = 12; // ! déclaration GLOBALE !!!
  var $b2 = 22; // déclaration GLOBALE !!!
  let $c2 = 32; // déclaration locale
}

console.log("Variable $a2 :", $a2);
console.log("Variable $b2 :", $b2);
// console.log("Variable $c2 :", $c2);
// ! erreur car $c2 n'est valide que dans initVar()

//----------------------------------------------------------------------------------------

const PI = 3.14;
// PI = 3.1416;
// ! erreur car PI est une valeur constante

const TAB = [1, 2, 3];
TAB[0] = 11; // ok car on modifie le contenu de tab sans recréer le tableau
TAB.push(4); // ok car on modifie le contenu de tab sans recréer le tableau
console.log("Constante TAB :", TAB);

// tab = [3, 2, 1];  // ! erreur car l'adresse de tab est constante
// tab = tab.concat([6, 7, 8]);  // ! erreur car l'adresse de tab est constante</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH3Js02LesTableaux">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑10 ‒ js02&nbsp;-&nbsp;les&nbsp;tableaux.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">/* 2019‑09‑10 */

/*
 * les tableaux sont dynamiques (leur taille n'est pas figée)
 ! les tableaux associatifs n'existent pas en js et seront émulés par des objets
 */

let filles = ["Marie", "Sophie", "Clara"];
let garcons = ["Christian", "Jean"];

// affichage d'un tableau
console.log(filles);
console.log(filles.toString());

console.log("------------ boucle for classique");
for (let i = 0; i < filles.length; i++) {
  // declaration, condition, incrementation.
  // Dans une méthode, var : publique, pash le let : private.
  // for equivalent du foreach.
  console.log(i, filles[i]);
}

console.log("------------ boucle for in");
for (const key in filles) {
  console.log(key, filles[key]);
}

console.log("------------ boucle for on");
for (const elem of filles) {
  console.log(elem);
}

//----------------------------------------------------------------------------------------
console.log("------------ tableaux dynamiques");
filles[5] = "Erika";
console.log(filles);

filles.push("Nadia"); // Rajoute à la fin…
console.log(filles);

//----------------------------------------------------------------------------------------
console.log("------------ déstructuration");
console.log(...filles); // Tous les elements dans l'objet.

//----------------------------------------------------------------------------------------
console.log("------------ assemblage");
let mixtes1 = [filles, garcons]; // ! tableau reprenant 2 tableaux
console.log(mixtes1);

let mixtes2 = [...filles, ...garcons]; // un seul tableau - équivalent de filles.concat(garcons)
console.log(mixtes2);</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH3LesObjetsJsEtObjetsJSON">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑10 ‒ js03&nbsp;-&nbsp;les&nbsp;objets&nbsp;js&nbsp;et&nbsp;objets JSON.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">/*
 * les objets javascript et les objets JSON (Javascript Object Notation)
 * les objets sont dynamiques (il est possible d'ajouter des attributs)
 */

console.log("------------ les objets javascript");
// * dans un objet, les valeurs peuvent être de n'importe quel type (même une fonction)
let objetPers = {
	prenom: "John",
	nom: "Doe",
	saluer: function() {
		console.log(`bonjour, je suis ${this.nom}, ${this.prenom}.`);
	}
};
console.log("objetPers:", objetPers);
console.log('objetPers["prenom"]:', objetPers["prenom"]); // le nom de la clé (key) doit être entre guillemets
console.log("objetPers.prenom:", objetPers.prenom);
objetPers.saluer();

console.log("Object.keys(objetPers):", Object.keys(objetPers)); //Object.keys() permet d'obtenir toutes les clés de l'objet
console.log("Object.values(objetPers):", Object.values(objetPers)); //Object.values() permet d'obtenir toutes les valeurs de l'objet

console.log("------------ parcours d'un objet");
for (let key in objetPers) {
	console.log("key :", key, "\tvalue :", objetPers[key]);
}

console.log("------------ modification d'un objet");
objetPers.nom = "Dodo";
objetPers.age = 42;
console.log("objetPers :", objetPers);

console.log("------------ les objets JSON");
// * tout à fait équivalent aux objets ci-dessus sauf que :
// * dans un objet JSON les valeurs peuvent être des strings, des nombres, des arrays, des objets, des booléens ou null
// ! mais pas des fonctions

let jsonPers = {
	prenom: "John",
	nom: "Doe"
};

console.log("jsonPers:", jsonPers);
console.log("Object.keys(jsonPers):", Object.keys(jsonPers));
console.log("Object.values(jsonPers):", Object.values(jsonPers));</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH32Js04ManipulationDesObjets">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑10&nbsp;‒&nbsp;js04&nbsp;-&nbsp;manipulation&nbsp;des&nbsp;objets.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">/*
 * manipulation des objets : copie en surface et en profondeur
 */

const OBJECT_1 = { prenom: "John", nom: "Doe", hobbies: ["chasse", "lecture"] };
console.log("Object One :", OBJECT_1);
//console.log("Object One sous forme de chaîne :", JSON.stringify(OBJECT_1));

//------------------------------------------------------------------------------------------------------------
// copie par référence ( alias )
//------------------------------------------------------------------------------------------------------------
console.log("-------copie par référence");
const OBJECT_2 = OBJECT_1; // OBJECT_1 et OBJECT_2 désigne le même objet
OBJECT_2.prenom = "Jane"; // ! les prénoms de OBJECT_1 et OBJECT_2 sont tous les 2 modifiés
console.log("Object Two :", OBJECT_2);
console.log("Object One :", OBJECT_1);

//------------------------------------------------------------------------------------------------------------
// clonage d'un objet en superficie
//------------------------------------------------------------------------------------------------------------
console.log("-------clonage superficiel");
const obj3 = Object.assign({}, obj1); // copie de toutes les valeurs de obj1 vers un nouvel objet
obj3.prenom = "Patrick"; // modifé uniquement dans obj3
obj3.hobbies[0] = "pêche"; // ! modifié aussi dans l'array hobbies de obj1
console.log("obj3:", obj3);
console.log("obj1:", obj1);

//------------------------------------------------------------------------------------------------------------
// clonage d'un objet en profondeur
//------------------------------------------------------------------------------------------------------------
console.log("-------clonage en profondeur");
const obj4 = JSON.parse(JSON.stringify(obj1)); // transformation en string puis retransformation en objet
obj4.prenom = "Steph"; // modifé uniquement dans obj4
obj4.hobbies[0] = "PHP"; // modifié uniquement dans l'array hobbies de obj4
console.log("obj4:", obj4);
console.log("obj1:", obj1);

//------------------------------------------------------------------------------------------------------------
// protection de l'objet
//------------------------------------------------------------------------------------------------------------
console.log("-------protection de l'objet");
const obj11 = { nom: "Médor", espece: "Chien" };
const obj12 = JSON.parse(JSON.stringify(obj11)); // transformation en string puis retransformation en objet
const obj13 = JSON.parse(JSON.stringify(obj11)); // transformation en string puis retransformation en objet

console.log("obj11:", obj11);
console.log("obj12:", obj12);
console.log("obj13:", obj13);

obj11.nom = "Milou";
obj11.couleur = "blanc"; // ajout d'une nouvelle propriété possible

Object.seal(obj12);
obj12.nom = "Milou";
obj12.couleur = "blanc"; // ! impossible de modifier la structure de l'objet

Object.freeze(obj13);
obj13.nom = "Milou"; // ! impossible de modifier les valeurs
obj13.couleur = "blanc"; // ! impossible de modifier la structure de l'objet

console.log("obj11:", obj11);
console.log("obj12(seal):", obj12);
console.log("obj13(freeze):", obj13);</code></pre>

                    </div>

                    <div class = "ui segment">
                        <h3 id = "titleH3Js05LesFonctions">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑23&nbsp;‒&nbsp;js05&nbsp;-&nbsp;les&nbsp;fonctions.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// js05 - les fonctions.js
/*
 * les fonctions
 */

// fonctions avec et sans retour de valeur

function saluer() {
  console.log("hello !");
}
saluer(); // appel de la fonction

function somme($nb1, $nb2) {
  let $total = $nb1 + $nb2; // ! total est une variable globale
  return $total;
}
console.log("Fonction « somme(10,6); » :", somme(10, 6));

//----------------------------------------------------------------------------------------

// différentes façons d'écrire les fonctions

// fonction classique
function parler() {
  console.log("je parle !");
}
parler();

// fonction anonyme stockée dans une variable
let $crier = function() {
  console.log("je crie !");
};
$crier();

// fonctions flechées
let $hurler = () => {
  console.log("Je hurle !");
};
$hurler();

let $doubleDe = $nbre => {
  return $nbre * 2;
};
console.log("$doubleDe(6) :", $doubleDe(6));

let $tripleDe = $nbre => $nbre * 3; // possible lorsque la fonction est uniquement composée d'un return
console.log("Fonction fléché $tripleDe(6) :", $tripleDe(6));

//----------------------------------------------------------------------------------------

// paramètres

function presentation(prenom, nom = "Martin") {
  // ! le ou les paramètres, facultatifs doivent toujours être les derniers
	// ⚠ ce ne est pash une variable.
  console.log(`Bonjour je m'appelle ${prenom} ${nom} !`);
}
presentation("John", "Doe");
presentation("Jean"); // par défaut, le nom est "Martin"
presentation(); // ! le prénom est indéfini

function totalAchats(tauxTVA, ...montants) {
  // ! il ne peut y avoir qu'une seule variable de type ...rest
  // ! cette variable doit toujours être le dernier paramètre de la fonction
  // * montants est considéré comme un tableau
  let total = 0;
  for (let i = 0; i < montants.length; i++) {
    total = total + montants[i];
  }
  return total * (1 + tauxTVA);
}
console.log(
  "totalAchats(0.21, 55, 14, 12, 23) :",
  totalAchats(0.21, 55, 14, 12, 23)
);

//----------------------------------------------------------------------------------------</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH42019y09m03sArrayObject">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑23&nbsp;‒&nbsp;js06&nbsp;-&nbsp;l'objet&nbsp;Array.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// js06 - l'objet Array.js
/*
 * quelques méthodes de l'objet Array (voir la documentation officielle pour plus d'infos)
 *
 ! certaines méthodes modifient le tableau : push, pop, fill, sort, reverse, forEach...
 * d'autres méthodes créent un nouveau tableau : map, concat, filter...
 *
 * les fonctions passées en argument peuvent être des fonctions classiques ou fléchées
 */</code></pre>

                        <pre><code class = "language-javascript line-numbers">const RESULTATS = [7, 12, 15, 4, 19];
console.log("Resultats :", RESULTATS);

//----------------------------------------------------------------------------------------
// * méthodes qui renvoient un nouveau tableau
//----------------------------------------------------------------------------------------
console.log("-------------- pas de modification du tableau original");

// renvoie un tableau reprenant uniquement les éléments répondant à la condition donnée par la fonction
console.log(
  "RESULTATS.filter((x) => x >= 10 ) :",
  RESULTATS.filter(x => x >= 10)
);

// renvoie un nouveau tableau dont chque élément correspond à la transformation indiquée dans la fonction
console.log("RESULTATS.map((a) => a / 2 ) :", resultats.map(a => a / 2));

// renvoie UN résultat qui est l'accumulation de toute les valeurs suivant la fonction passée
// total est l'accumulateur et vaut 0 au départ
// element désigne successivement chacun des éléments du tableau
console.log(
  "RESULTATS.reduce((total, element) => total += element ) :",
  RESULTATS.reduce((total, element) => (total += element))
);</code></pre>

                        <pre><code class = "language-javascript line-numbers">//----------------------------------------------------------------------------------------
// ! méthodes qui modifient le tableau original
//----------------------------------------------------------------------------------------
console.log("-------------- !!! modification du tableau original !!!");

// push : ajoute un élément et retourne la nouvelle taille
let $taille = RESULTATS.push(3);
console.log("Resultats :", RESULTATS, "taille : ", $taille);

// pop : retire un élément et retourne l'élément supprimé
let $dernierTest = RESULTATS.pop();
console.log("Resultats :", RESULTATS, "dernierTest : ", $dernierTest);

// inverse le tableau
RESULTATS.reverse();
console.log("resultats.reverse() :", resultats);

// ! tri par ordre alphabétique
resultats.sort();
console.log("resultats.sort() :", resultats);

// * tri utilisant une fonction de comparaison
// la fonction doit renvoyer : une valeur négative si a < b, 0 si a==b, une valeur positive si a > b
resultats.sort((a, b) => b < a); //si b < a, on trie
console.log("resultats.sort( (a,b) => b > a ) :", resultats);</code></pre>

                        <pre><code class = "language-javascript line-numbers">//----------------------------------------------------------------------------------------
// * quelques exemples plus avancés
//----------------------------------------------------------------------------------------
console.log("-------------- quelques exemples");

let $suite = Array(10)
//crée un tableau de 10 éléments vides

	.fill(0)
	//remplit le tableau de 0

	.map((val, i) => i + 1);
	//renvoie un tableau dont chaque élément est remplacé par son indice + 1
	/*
	La méthode map(),
	crée un nouveau tableau avec les résultats de l'appel d'une fonction fournie,
	sur chaque élément du tableau appelant.
	*/

console.log("suite :", $suite);

//----------------------------------------------------------------------------------------

let $fibo1 = Array(10)
//crée un tableau de 10 éléments vides
	.fill(1)
	//remplit le tableau de 1

	.map((val, $i, array) =>
    $i < 2 ? val : (array[$i] = array[$i - 2] + array[$i - 1])
  );

console.log("Variable $fibo1 :", $fibo1);

//----------------------------------------------------------------------------------------

let $fibo2 = [...Array(10)].reduce((acc, val, i) => acc.concat(i < 2 ? 1 : acc[i - 2] + acc[i - 1]), []);
// Crée un tableau de 10 éléments vides,
// le déstructure et le recompose pour obtenir un tableau de 10 éléments "undefined".
/*
(acc) Accumulator
(cur) Current Value
(idx) Current Index
(src) Source Array

La méthode concat(),
combine le texte de plusieurs chaînes,
avec la chaîne appelante,
et renvoie la nouvelle chaîne ainsi formée.
*/
console.log("Variable $fibo2 :", $fibo2);
// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

//----------------------------------------------------------------------------------------

let $alea = [...Array(10)].map(x => Math.floor(Math.random() * 11));
//renvoie un tableau dont chaque élément est une valeur entière aléatoire entre 0 et 10
console.log("alea :", $alea);

//----------------------------------------------------------------------------------------
</code></pre>

                    </div>

                    <div class = "ui segment">
                        <h3 id = "titleH42019y09m24sJs07DomAccess">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑24&nbsp;‒&nbsp;js07&nbsp;-&nbsp;l'accès au DOM.js&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// js07 - l'accès au DOM.js
/*
 * accès aux objets d'une page html (DOM) et du navigateur (BOM)
 * + quelques méthodes, propriétés...
 * (voir la documentation officielle pour plus d'infos)
 */</code></pre>

                        <pre><code class = "language-javascript line-numbers">//----------------------------------------------------------------------------------------
// * accès aux objets du DOM (Document Object Model)
//----------------------------------------------------------------------------------------

// désignation d'un ou plusieurs objets du document

let $n = document.getElementById("txtNom");
// élément ayant la propriété id = "txtNom"

let $p = document.getElementsByTagName("p");
// collection de tous les éléments de type &lt;p&gt;

let $r = document.getElementsByClassName("rouge");
// collection de tous les éléments de classe = "rouge"

let $c = document.getElementsByName("choix");
// collection  de tous les éléments avec name = "choix"

let $garage = document.getElementById("divGarage");
let $voitures = $garage.getElementsByTagName("p");
// tous les &lt;p&gt; du &lt;div id="divGarage"&gt;

let $toutesVoitures = document.querySelectorAll("#divGarage &gt; p");
// tous les &lt;p&gt; du &lt;div id="divGarage"&gt;

let $premiereVoiture = document.querySelector("#divGarage &gt; p");
// le premier &lt;p&gt; du &lt;div id="divGarage"&gt;
// querySelector et querySelectorAll utilisent la syntaxe des sélecteurs CSS</code></pre>

                        <pre><code class = "language-javascript line-numbers">//----------------------------------------------------------------------------------------
// * accès aux contenu des objets du DOM
//----------------------------------------------------------------------------------------

// pour les balises de type container (div, h1, td, p...)

let $voiture1_balise = document.querySelector("#divGarage &gt; p").innerHTML;
// lecture du texte interprété

let $voiture1_texte = document.querySelector("#divGarage &gt; p").textContent;
// lecture du texte à plat

document.querySelector("#divGarage &gt; p").innerHTML = "Volvo &lt;strong&gt;rouge&lt;/strong&gt;";
// la balise strong sera interprétée

document.querySelector("#divGarage &gt; p").textContent = "Volvo &lt;strong&gt;rouge&lt;/strong&gt;";
// &lt;strong&gt; sera un simple texte

// pour les balises de type autofermantes (input, img...)

let $nom = document.getElementById("txtNom").value;

document.getElementById("txtNom").value = "Alonzo";

// quelques exemples de méthodes ou fonctions...
let $classes = document.getElementById("txtNom").classList;

// liste des classes
document.getElementById("div1").style.marginTop = ".25cm";
document.getElementById("txtNom").setAttribute("required", "");</code></pre>

                        <pre><code class = "language-javascript line-numbers">//----------------------------------------------------------------------------------------
// * accès aux objets du BOM (Browser Object Model)
//----------------------------------------------------------------------------------------

// popup avec bouton OK
window.alert("Bonjour");

// popup avec OK et CANCEL
// OK renvoie true et CANCEL renvoie false
window.confirm("Encore ?");

// popup avec OK, CANCEL et zone de saisie
// OK renvoie la valeur saisie et CANCEL renvoie null
let $nom = prompt("votre nom ?");

// quelques exemples de méthodes ou fonctions...
window.history.back();
// page précédente

let $adresse = window.location;
// URL courante

let $largeur = window.innerWidth;
// largeur interne de la fenêtre</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH42019y09m24sJs07DomAccess">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑24&nbsp;‒&nbsp;js08 - les évènements&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// js08 - les évènements.js

							/*
 * gestion des évènements dans une page html
 * (voir la documentation officielle pour plus d'infos)
 */

//----------------------------------------------------------------------------------------
// * association d'un évènement à un objet du DOM
//----------------------------------------------------------------------------------------

// association d'une fonction nommée
document.getElementById("btnSaluer").addEventListener("click", saluer);
// ! saluer sans parenthèse

function saluer() {
	console.log("Bonjour");
}

// association d'une fonction anonyme
document.getElementById("btnManger").addEventListener("click", function() {
	console.log("Je mange !");
});

//----------------------------------------------------------------------------------------
// * désassociation d'un évènement à un objet du DOM
//----------------------------------------------------------------------------------------
document.getElementById("btnSaluer").removeEventListener("click", saluer);

// ! impossible de désassocier "btnManger" car on utilise une fonction anonyme

//----------------------------------------------------------------------------------------
// * propagation des évènements
//----------------------------------------------------------------------------------------

// * bubbling (de l'intérieur vers l'extérieur)
// --------------------------------------------
// soit un bouton 'btn1' dans un div 'div1'
document.getElementById("btn1").addEventListener("click", function() {
	console.log("click sur le &lt;button&gt;");
});
document.getElementById("div1").addEventListener("click", function() {
	console.log("click dans le &lt;div&gt;");
});
// click sur le bouton :
// =&gt; "click sur le &lt;button&gt;"
// =&gt; "click dans le &lt;div&gt;"

// * capturing (de l'extérieur vers l'intérieur)
// ---------------------------------------------
// soit un bouton 'btn2' dans un div 'div2'
document.getElementById("btn2").addEventListener(
	"click",
	function() {
		console.log("click sur le &lt;button&gt;");
	},
	true // useCapture
);
document.getElementById("div2").addEventListener(
	"click",
	function() {
		console.log("Le repas est bon ! (click dans &lt;div&gt;");
	},
	true // useCapture
);
// click sur le bouton :
// =&gt; "click dans le &lt;div&gt;"
// =&gt; "click sur le &lt;button&gt;"

// * stopper la propagation des évènements
// ---------------------------------------
// soit un bouton 'btn3' dans un div 'div3'
document.getElementById("btn3").addEventListener("click", function(evt) {
	evt.stopPropagation();
	console.log("click sur le &lt;button&gt;");
});
document.getElementById("div3").addEventListener("click", function() {
	console.log("click sur le &lt;button&gt;");
});
// click sur le bouton :
// =&gt; "click sur le &lt;button&gt;"
// ! la propagation du click est stoppée

// * empecher le comportement normal d'un élément
// ----------------------------------------------
// soit un checkbox 'chkValid'
document.getElementById("chkValid").addEventListener("click", function(evt) {
	evt.preventDefault();
	console.log("impossible de cocher ou décocher la case");
});
// click sur le checkbox :
// =&gt; affichage du message
// ! le bouton ne se (dé)coche pas

//----------------------------------------------------------------------------------------</code></pre>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH32019y09m24sJs07DomAccess">
                            <a href = "?#title-h2-table-of-contents">2019‑09‑24&nbsp;‒&nbsp;js09 - modification du DOM&nbsp;:</a>
                        </h3>

                        <pre><code class = "language-javascript line-numbers">// js09 - modification du DOM
/*
 * modification du DOM: ajout, suppression, modification des éléments
 * (voir la documentation officielle pour plus d'infos)
 */

//----------------------------------------------------------------------------------------
// * ajout, suppression d'éléments du DOM
//----------------------------------------------------------------------------------------

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

//----------------------------------------------------------------------------------------
// * gestion des attributs
//----------------------------------------------------------------------------------------
$maison.innerHTML = "Voici ma maison";

$maison.style.display = "none";
$maison.style.display = "";

$maison.classList.add("div-maison-rouge"); // ajoute la classe
$maison.classList.remove("div-maison-rouge"); // supprime la classe
$maison.classList.toggle("div-maison-select"); // si la classe existe elle est supprimée sinon elle est ajoutée

$maison.setAttribute("superficie", "600"); // ajoute un attribut
let superficie = $maison.getAttribute("superficie"); // recupère la valeur de l'attribut
$maison.removeAttribute("superficie"); // supprime l'attribut

//----------------------------------------------------------------------------------------
// * navigation dans le DOM
//----------------------------------------------------------------------------------------

// parents et enfants
console.log($maison.childNodes); // tableau de tous les noeuds enfants
console.log($maison.firstChild); // le premier noeud enfant
console.log($maison.childNodes[0]); // le premier noeud enfant
console.log($maison.lastChild); // le dernier noeud enfant

console.log($salon.parentNode); // le noeud parent

console.log($salleAManger.previousElementSibling); // le noeud précédent
console.log($salon.nextElementSibling); // le noeud suivant

//----------------------------------------------------------------------------------------

/*
 ! Attention:
 * Node représente n'importe quel type de noeud
 *  Element est un noeud spécialisé : &lt;p&gt; &lt;div&gt;
 *  Text est un noeud spécialisé : le texte dans un div
 *  Document est un noeud spécialisé
 *  ...

  exemples:
  $el.children =&gt; liste des noeuds Element
  $el.childNodes =&gt; liste des noeuds de tout type
  $el.parentElement =&gt; le parent doit être un Element
  $el.parentNode =&gt; le parent peut être un Element ou un Document
*/

//----------------------------------------------------------------------------------------</code></pre>

                    </div>
                </fieldset>

            </section>

            <section>

                <fieldset>

                    <legend><h2 id = "titleH2JavaScript"><a href = "?#title-h2-table-of-contents">JavaScript&nbsp;:</a>
                        </h2></legend>

                    <section>
                        <div class = "ui segment info message">
                            <p>2019‑09‑03 Mardi : 09H00 :</p>
                        </div>

                        <div class = "ui segment">

                            <h3 id = "titleH3JavaScriptIntroduction">
                                <a href = "?#title-h2-table-of-contents">Intro‑duction :</a></h3>

                            <h4 id = "titleH4PackageManager">
                                <a href = "?#title-h2-table-of-contents">Package‑Manager :</a>
                            </h4>

                            <dl>
                                <dt>N.P.M.</dt>
                                <dd>Nod Packet Manager. NodJS</dd>
                            </dl>

                        </div>

                        <div class = "ui segment">

                            <h5><a href = "?#title-h2-table-of-contents">Object‑Notation :</h5>

                            <dl>
                                <dt>←⊖⊕⊖ DƷEZONË<br> →⊕⊖⊖ JSON<br> →⊕⊕⊕ J.S.Ô.N.</dt>

                                <dd>Java‑Script Ôbject Notatiôn.</dd>
                            </dl>

                        </div>

                        <div class = "ui segment">

                            <legend><h4 id = "titleH3JavaScript"><a href = "?#title-h2-table-of-contents">JavaScript</a>
                                </h4>
                            </legend>

                            <div class = "ui segment">
                                <h5 id = "titleH4FrameWork">
                                    <a href = "?#title-h2-table-of-contents">FrameVorg Java‑Script</a>
                                </h5>

                                <ul>
                                    <li>React {FaceBook Inc}</li>
                                    <li>Angular {Google} (trop lourd.)</li>
                                    <li>Vue (choix du prof. Basé sur Angular, mais plus simple.)</li>
                                </ul>

                            </div>

                            <div class = "ui segment">

                                <h5 id = "titleH4DataBases">
                                    <a href = "?#title-h2-table-of-contents">Genre Base de donnée :</a>
                                </h5>
                                <ul>
                                    <li>MySQL</li>
                                    <li>MariaDB</li>
                                    <li>PostGreSQL</li>
                                    <li>MongoDB</li>
                                    <li>N.O. S.Q.L.</li>
                                    <li>Oracle</li>
                                </ul>

                            </div>

                            <div class = "ui segment">
                                <h5 id = "titleH4JavaScriptGestionary">
                                    <a href = "?#title-h2-table-of-contents">La gestion de Java‑Script :</a></h5>
                                <ul>
                                    <li>Le cônsortium
                                        <abbr title = "European Computer Manufacturers Association">E.C.M.A.</abbr> Script.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class = "ui segment">
                            <h4 id = "TitleH3AJAX"><a href = "?#title-h2-table-of-contents">Le A.J.A.X. : </a></h4>
                            <ul>
                                <li>A‑syn‑qʰronous قرن JavaScript and X.M.L. {eXtensible Mark‑up Language}</li>
                            </ul>

                        </div>

                        <div class = "ui segment">

                            <h4 id = "titleH3TypeDeLanguages">
                                <a href = "?#title-h2-table-of-contents">Type de languages informatique</a></h4>

                            <ul>
                                <li>Côm‑pila‑tiõn</li>
                                <li>Trans‑pila‑tiõn</li>
                                <li>Inter‑preta‑tiõn</li>
                            </ul>

                            <ul>
                                <li><strong>Poly‑Fill :</strong> bout de code qui remplacera une instruction,<br>substitut…
                                </li>
                            </ul>

                            <div class = "ui segment">

                                <h5 id = "titleH4TypageTIScript"><a href = "?#title-h2-table-of-contents">TIScript</a>
                                </h5>
                                <ul>
                                    <li>Le typage statique.</li>
                                </ul>

                            </div>

                            <div class = "ui segment">
                                <h5 id = "titleH4TypageJavaScript">
                                    <a href = "?#title-h2-table-of-contents">JavaScript</a>
                                </h5>
                                <ul>
                                    <li>Le typage dynamique.</li>
                                </ul>
                            </div>

                        </div>
                    </section>

                    <section>
                        <div class = "ui segment info message">
                            <p>2019‑09‑03 ‒ 10H58…</p>
                        </div>

                        <div class = "ui segment">
                            <h4 id = "titleH3JavaScriptConsole"><a href = "?#title-h2-table-of-contents">Console</a>
                            </h4>

                            <p>JavaScript n'affiche pash de lui même les erreurs lors de l'execution.<br>Il faut dès lors ce servir de la console, qui est utile pour tester et débuguer.<br> Il faut que ce soit un reflexe.
                            </p>

                            <p>Il y a beaucoup de chose que l'on va pouvori tester.</p>

                            <pre><code class = "language-javascript line-numbers">console.log();</code></pre>

                            <pre><code class = "language-javascript line-numbers">/* Numeric */
var $a = 25;

console.log($a);

/* String */
var $b = "25";

/* Numeric */
$a + 1
26

/* String */
$b + 1
"251"
// Si on utilise un texte, le + n'est plus un opérateur addition, mais concatenation.
// TransTypage de langage.</code></pre>
                        </div>

                        <div class = "ui segment">

                            <p>Il faut déclarer les variables.</p>

                            <p>Quoi que en disent le professeur Servais Dominique,<br> les caractères UniCode pro les variables & constante est accepté,<br> les variables peuvent aussi commencé par un $,<br> lui tend l'anglisime, en supprimant les accents,<br> ce à quoi je m'oppose,<br> car ma langue albanais à des accents,<br> pash eux.
                            </p>
                            <ul>
                                <li>
                                    <a href = "https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Types_et_grammaire"
                                       target = "_blank">Grammaire & types en JS (par Mozilla).</a>
                                </li>
                            </ul>

                        </div>

                        <div class = "ui segment">
                            <pre><code class = "language-javascript line-numbers">"ABC" + "DEF" ⇒ "ABCDEF"</code></pre>

                            <p>(dans la plupart des languages on obtient c'est cela,<br> car + est un opérateur de concatenation.)
                            </p>

                            <h5>En PHP :</h5>

                            <p>Il opère autre‑mênt.</p>
                            <pre><code class = "language-php line-numbers">"ABC" . "DEF"</code></pre>

                            <p>Pour le professeur Servais, c'est une erreur,<br> car dans la plupart des languages,
                                <code>.</code> est un symbole d'appertenance, retranscrit
                                <code>-></code> en P.H.P., qui signifie invocation de… </p>
                        </div>

                        <div class = "ui segment">
                            <p>Le JavaScript n'est pash un language totale‑mênt objet,<br> même si il en utilise,<br> il n'y a pash de classe.<br> Il utilise un constructeur et le proto‑typage.<br> On peut modifier les prototypes,<br> genre string, number, c'est le typage.<br> string est objet et il a des proto‑types.
                            </p>

                            <p>Le prof n'utilisera pash ces fonctions,<br> car on va utiliser
                                <abbr title = "European Computer Manufacturers Association">E.C.M.A.</abbr> 6 et on peut faire des classes.
                            </p>

                            <ul>
                                <li>
                                    <a href = "https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Object/proto"
                                       target = "_blank">__proto__</a>
                                </li>
                            </ul>
                            <pre><code class = "language-javascript line-numbers">$a.__proto__
// Affiche tou e les fonctions et le type $a.__proto__</code></pre>

                        </div>

                        <div class = "ui segment">
                            <h4 id = "titleH3Boucle"><a href = "?#title-h2-table-of-contents">Boucle</a></h4>

                            <pre><code class = "language-javascript line-numbers">for(let $i = 1; $i <= 10; i++) {
	/* $i++ = $i + 1 */
	/* trois instruction, accolade permettre plusieurs instruction. */
	/* initialisation, test, incrementation. */
	console.log(i);
	// 1 à 10.
}</code></pre>

                            <p>Pour faire plusieurs instruction,<br> on utilise des accolades.</p>

                            <p>Les accolades ne sont pourtant pash obligatorie.</p>

                            <p>Ce sont des bloques,<br> mais êllë a une incidence sur la portée des variables.</p>
                        </div>

                        <div class = "ui segment">

                            <h4 id = "titleH3While"><a href = "?#title-h2-table-of-contents">While
                                    <strong style = "color: #3366FF;">[vħajlə]</strong></a></h4>

                            <p>Autre type de boucle,</p>

                            <pre><code class = "language-javascript line-numbers">while(test) {};
// il test vrai / true (≠ 0) ou faux / false (0).
// true, tout ce qui n'est pash égal à 0.</code></pre>

                            <pre><code class = "language-javascript line-numbers">$c = $b = $a = 25
/* Assignation en cascade. */</code></pre>

                            <pre><code class = "language-javascript line-numbers">while ($a == 25);
	  ($a === 25);</code></pre>

                        </div>

                        <div class = "ui segment">

                            <h4 id = "titleH3Operator"><a href = "?#title-h2-table-of-contents">Opérateur</a></h4>

                            <pre><code class = "language-javascript line-numbers">!      /* inverse, nêʒa‑tiõn, côntra‑ire… */
!=     /* pash égal à… */
==     /* égal à… */
>=     /* Plus ʒrand ou égal à… */
<=     /* Plus petit ou égal à… */
<      /* Plus petit qwe… */
>      /* Plus ʒrand qwe… */
&& AND /* et… */
|| OR  /* ou… */</code></pre>

                            <p>Les conditions.</p>

                        </div>

                        <div class = "ui segment">

                            <p>
                                <code class = "language-javascript line-numbers">foreach();</code>, oublié,<br> c'est assez nouveau dans certains languages.<br> Mais en JS c'est :
                            </p>

                            <pre><code class = "language-javascript line-numbers">for(let $i in tab) {
}
// Variable in Ensemble,<br>
// Il n'y pash d'incrementation.</code></pre>

                            <p>ou</p>

                            <pre><code class = "language-javascript line-numbers">for (let $i of tab) { }</code></pre>

                            <p>L'objectif de
                                <code>foreach</code> est de parcourir une collection.<br> On peut le faire avec un
                                <code>for of</code>, <br>en jouant sur longueur et l'indice.</p>

                        </div>

                        <div class = "ui segment">
                            <h4 id = "titleH3DoWhile"><a href = "?#title-h2-table-of-contents">do … while</a></h4>

                            <p>L'instruction
                                <code>do...while</code>,<br> crée une boucle qui exécute une instruction jusqu'à ce qu'une condition de test ne soit plus vérifiée.<br> La condition est testée après que l'instruction soit exécutée,<br> l'instruction définie dans la boucle est donc exécutée au moins une fois.
                            </p>

                            <pre><code class = "language-javascript line-numbers">var result = "";
var i = 0;

do {
  i = i + 1;
  result = result + i;
} while (i < 5);

console.log(result);
// expected result: "12345"
</code></pre>

                            <h5 id = "titleH4DoWhileSyntaxe">Syntaxe</h5>

                            <pre><code class = "language-javascript line-numbers">do
   <em>instruction</em>
while (<em>condition</em>);
</code></pre>

                            <dl>
                                <dt><code>instruction</code></dt>
                                <dd>Une instruction exécutée au moins une fois et ré-exécutée chaque fois que la condition de test est évaluée à
                                    <code>true</code>. On peut exécuter plusieurs instructions au sein d'une boucle grâce à l'instruction
                                    <a class = "new"
                                       href = "https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/bloc"
                                       rel = "nofollow"
                                       title = "Cette documentation n'a pas encore été rédigée, vous pouvez aider en contribuant&nbsp;!"><code>block</code></a> (<code>{ ... }</code>) qui permet de grouper différentes instructions en une seule.
                                </dd>
                            </dl>

                            <dl>
                                <dt><code>condition</code></dt>
                                <dd>Une expression évaluée après chaque passage dans la boucle. Si l'évaluation de la
                                    <code>condition</code> donne <code>true</code> (la condition est vérifiée),
                                    <code>instruction</code> sera exécutée à nouveau. Lorsque
                                    <code>condition</code> donne
                                    <code>false</code>, le contrôle passe à l'instruction suivant la boucle
                                    <code>do...while</code>.
                                </dd>

                        </div>

                        <div class = "ui segment">
                            <h4 id = "titleH4Alternative"><a href = "?#title-h2-table-of-contents">Alternative</a></h4>

                            <div class = "ui segment">

                                <h5 id = "titleH5AlternativeLesTests">
                                    <a href = "?#title-h2-table-of-contents">Les tests</a></h5>

                                <pre><code class = "language-javascript line-numbers">if () { else }</code></pre>

                                <pre><code class = "language-javascript line-numbers">if ( a < 12) {
	----
} else if (a < 12) {
	----
} else {
	----
}</code></pre>
                            </div>

                            <div class = "ui segment">
                                <h5 id = "titleH4SwitchAndCase">
                                    <a href = "?#title-h2-table-of-contents">Switch & Case</a>
                                </h5>

                                <p>L'instruction
                                    <code>switch</code> évalue une expression et, selon le résultat obtenu et le cas associé,<br>exécute les instructions correspondantes.
                                </p>
                                <pre><code class = "language-javascript line-numbers">switch (a) {
	case 1 : - - -
		break;
	case 2 : - - -
		break;
	default : - - -
		break;
}</code></pre>

                            </div>

                            <div class = "ui segment">
                                <h5 id = "titleH4Ternaire"><a href = "?#title-h2-table-of-contents">Ternaire</a></h5>

                                <h6 id = "titleH5TernaireSyntaxe">Syntaxe</h6>

                                <pre><code class = "language-javascript line-numbers"><em>condition</em> ? <em>exprSiVrai</em> : <em>exprSiFaux</em></code></pre>

                                <h7 id = "titleH7TernaireParamètres">Paramètres</h7>

                                <dl>
                                    <dt><code>condition</code></dt>
                                    <dd>Une expression qui est évaluée en un booléen (<code>true</code> ou
                                        <code>false</code>).
                                    </dd>

                                    <dt><code>exprSiVrai</code></dt>
                                    <dd>Une expression qui est évaluée si la condition est équivalente à
                                        <code>true</code> (<em>truthy</em>)
                                    </dd>

                                    <dt><code>exprSiFaux</code></dt>
                                    <dd>Une expression qui est évaluée si la condition est équivalente à
                                        <code>false</code> (<em>falsy</em>).
                                    </dd>
                                </dl>

                                <pre><code class = "language-javascript line-numbers">if(a < 25) { b = 1; } else { b = 2; }

b = a < 25 ? 1 : 2;</code></pre>
                            </div>

                        </div>
                    </section>

                    <section>
                        <div class = "ui segment info message">
                            <p>2019‑09‑03 ‒ 13H00…</p>
                        </div>

                        <div class = "ui segment">

                            <script>
                                // js01.js
                                "use strict";
                                // prof conseil de le mettre systématiquement. En début du model afin que il soti globale.

                                console.log("hello");

                                /* Réactiver quand fichier terminé. */
                                // window.alert("coucou");
                                // Affiche une fenêtre. Objet windows, objet document.

                                var $nom = "Louis";

                                console.log("Bonjour " + $nom + " !");
                                console.log(`Bonjour ${$nom} !`);
                                // {quote inversé, alternate concatenation.}

                                // La porté de variable.

                                function js01Saluer() {
                                    // Pré‑nom = "Albert";
                                    var $prenom = "Albert";
                                    // si on met var il rend la variable active que dans la fonction est n'est plush utilisable en externe.
                                    console.log(`Salut ${$prenom}`);
                                }

                                // Il faut appeler l'outil.
                                js01Saluer();
                                // Afficher la fonction.
                                console.log("--------------------");

                                /* console.log("prenom :", $prenom); */
                                // Afficher prénom, mais erreur, pro‑quoi, car la variable ne fut pash défini…
                                // Suite au domaine de visibilité, quand on déclare une variable.

                                console.log("Afficher l'âge.");
                                if (1) {
                                    var $age = 42;
                                    console.log("age:", $age);
                                    // Vous déclarez une variable dans un block, êllë n'est visible que dans ce bloque.'
                                }
                                console.log("--------------------");

                                // var ‒ ϜΑΡ :
                                // let ‒ ΛΕΤ : est une amelioration du var. Car êllë affiche des erreurs plus precise.

                                // Afficher les nombres de 1 à 10
                                console.log("Afficher les nombres de 1 à 10");
                                for (let $i = 1; $i <= 10; $i++) {
                                    console.log("i :", $i);
                                }
                                console.log("--------------------");

                                // Afficher les nombres de 10 à 1
                                console.log("Afficher les nombres de 10 à 1");
                                for (let $i = 10; $i >= 1; $i--) {

                                    console.log("i: ", $i);
                                }
                                console.log("--------------------");

                                // Créer un tableau tab contenant les nombres 1, 5 et 9
                                let $tab = [1, 5, 9];

                                // Afficher le contenu de tab sur des lignes séparées
                                console.log("Afficher le contenu de tab sur des lignes séparées");
                                for (let $i = 0; $i < $tab.length; $i++) {
                                    console.log(`tab[${$i}] :`, $tab[$i]);
                                }
                                console.log("--------------------");

                                // Afficher les éléments de tab plus grand ou égal à 4.
                                console.log("Afficher les éléments de tab plus grand ou égal à 4.");
                                for (let $i = 0; $i < $tab.length; $i++) {
                                    if ($tab[$i] > 4) {
                                        console.log(`tab[${$i}] :`, $tab[$i]);
                                    }
                                }
                                console.log("--------------------");

                                // Créer un tableau tab2 reprenant les nombres de 1 à 1000
                                console.log("Créer un tableau tab2 reprenant les nombres de 1 à 1000");
                                let $tab2 = [];
                                for (let $i = 1; $i <= 1000; $i++) {
                                    $tab2.push($i);
                                }
                                console.log("tab2 :", $tab2);

                                console.log("--------------------");

                                // Écrire une fonction moyenne qui renvoi la moyenne du tableau passé en argument.
                                console.log("Écrire une fonction moyenne qui renvoi la moyenne du tableau passé en argument.");
                                const MOYENNE = function ($tab) {
                                    let $total = 0;
                                    for (let $i = 0; $i < $tab.length; $i++) {
                                        $total = $total + $tab[$i];
                                    }
                                    return $total / $tab.length;
                                };
                                console.log("moyenne($tab) :", MOYENNE($tab));
                                console.log("moyenne($tab2) :", MOYENNE($tab2));
                                console.log("moyenne([]) :", MOYENNE([]));
                                console.log('moyenne([2,4,9,"a"]) :', MOYENNE([2, 4, 9, "a"]));

                                console.log("--------------------");

                                const PI = 3.14;
                                // PI = 3.1415265358979;
                                // Error can't change constant.

                                // Porté des variables.

                                /*
									Fonction nommé
									soite
									vous mettez uen variable une fonction.
									*/
                                let $saluer2 = function () {
                                    console.log(`coucou`);
                                };
                            </script>

                            <pre><code class = "language-javascript line-numbers">// js01.js

"use strict";
// prof conseil de le mettre systématiquement. En début du model afin que il soti globale.

console.log("hello");

windowsalert("coucou");
// Affiche une fenêtre. Objet windows, objet document.

var $nom = "Louis";

console.log("Bonjour " + $nom + " !");
console.log(`Bonjour ${$nom} !`);
// {quote inversé, alternate concatenation.}

// La porté de variable.

function saluer() {
	// prenom = "Albert";
	var $prenom = "Albert";
	// si on met var il rend la variable active que dans la fonction est n'est plush utilisable en externe.
	console.log(`Salut ${$prenom}`);
}

// Il faut appeler l'outil.
saluer();
// Afficher la fonction

console.log("prenom :", $prenom);
// Afficher prenom, mais erreur, pro‑quoi, car la variable ne fut pash défini…

// Suite au domaine de visibilité, quand on déclare une variable.

if (1) {
	var $age = 42;

	console.log("age:", $age);
	// Vous déclarez une variable dans un block, êllë n'est visible que dans ce bloque.'
}

// var / ϜΑΡ :
// let / ΛΗΤ : est une amelioration du var. Car êllë affiche des erruers plus preceise.</code></pre>

                            <pre><code class = "language-javascript line-numbers">// js02.js

let affsomme = function (a, b) {
  console.log(a + b);
};

let affsomme2 = (a, b) => {
  console.log(a + b);
};

affsomme(12, 33);
affsomme2(12, 33);

/*
  let $ptvac = function($prixHorsTVA, $tauxtva) {
	  return $phtva + ($prixHorsTVA * $tauxtva / 100);
  };
  */

let $ptvac = (phtva, tauxtva) => phtva + (phtva * tauxtva / 100);
console.log(ptvac(550, 12));

let $aPayer = ptvac(550, 12);
console.log("À payer :", $aPayer);</code></pre>

                            <pre><code class = "language-javascript line-numbers">// js03.js

"use strict";

let $js03tab = [1, "deux", 3, 4, 5];
console.log($js03tab);
console.log($js03tab[1]);

for (let $i in $js03tab) {
	console.log($js03tab[$i]);
}

for (let $v of $js03tab) { // v = valeur.
	console.log($v);
}

$js03tab[2] = 33;
console.log($js03tab); // assinge valeur 33 à la troisième valeur du tableau.

$js03tab.push(666);
console.log($js03tab);

let $js03A, $js03B, $js03C;
[$js03A, $js03B, $js03C] = [77, 88, $js03tab];
console.log($js03A, $js03B, $js03C);

let $js03A2, $js03B2, $js03C2;
[$js03A2, $js03B2, $js03C2] = $js03tab;
console.log($js03A2, $js03B2, $js03C2);

// Je voudrais inversé A & B ?

let $temp = $js03A2;
$js03A2 = $js03B2;
$js03B2 = $temp;
console.log($js03A2, $js03B2, $js03C2);

// Inversion de valeur de deux variable’s.
// Ou mieux :
[$js03A2, $js03B2] = [$js03B2, $js03A2];
console.log($js03A2, $js03B2, $js03C2);

let $eq1 = ["Marie", "Pierre"];
let $eq2 = ["Louis", "Albert", "Marcel"];

// let $superEq = $eq1 + $eq2;
// let $superEq = $eq1.concat[$eq2]
let $superEq = [...$eq1, ...$eq2]; // ... signifie
console.log($superEq);

console.log("$eq1 :", $eq1);
console.log("...$eq1 :", ...$eq1);

// Objet
let $pers1 = {nom: "Dubois", prenom: "Luc"};
console.log($pers1);
console.log($pers1["nom"]);
console.log($pers1.nom);

// Voir tout les elements d'un objet.

for (let $i in $pers1) {
	console.log($pers1[$i])
}

/*
	for(let $v of $pers1) {
		console.log(v);
	}
 */</code></pre>

                            <script>// js02.js

                                let $affsomme = function (a, b) {
                                    console.log(a + b);
                                };

                                let $affsomme2 = (a, b) => {
                                    console.log(a + b);
                                };

                                $affsomme(12, 33);
                                $affsomme2(12, 33);

                                /*
									let $ptvac = function($prixHorsTVA, $tauxtva) {
										return $phtva + ($prixHorsTVA * $tauxtva / 100);
									};
									*/

                                let $ptvac = ($phtva, $tauxtva) => $phtva + ($phtva * $tauxtva / 100);
                                console.log($ptvac(550, 12));

                                let $aPayer = $ptvac(550, 12);
                                console.log("À payer :", $aPayer);

                                // js03.js

                                "use strict";

                                let $js03tab = [1, "deux", 3, 4, 5];
                                console.log($js03tab);
                                console.log($js03tab[1]);

                                for (let $i in $js03tab) {
                                    console.log($js03tab[$i]);
                                }

                                for (let $v of $js03tab) { // v = valeur.
                                    console.log($v);
                                }

                                $js03tab[2] = 33;
                                console.log($js03tab); // assinge valeur 33 à la troisième valeur du tableau.

                                $js03tab.push(666);
                                console.log($js03tab);

                                let $js03A, $js03B, $js03C;
                                [$js03A, $js03B, $js03C] = [77, 88, $js03tab];
                                console.log($js03A, $js03B, $js03C);

                                let $js03A2, $js03B2, $js03C2;
                                [$js03A2, $js03B2, $js03C2] = $js03tab;
                                console.log($js03A2, $js03B2, $js03C2);

                                // Je voudrais inversé A & B ?

                                let $temp = $js03A2;
                                $js03A2 = $js03B2;
                                $js03B2 = $temp;
                                console.log($js03A2, $js03B2, $js03C2);

                                // Inversion de valeur de deux variable’s.
                                // Ou mieux :
                                [$js03A2, $js03B2] = [$js03B2, $js03A2];
                                console.log($js03A2, $js03B2, $js03C2);

                                let $eq1 = ["Marie", "Pierre"];
                                let $eq2 = ["Louis", "Albert", "Marcel"];

                                // let $superEq = $eq1 + $eq2;
                                // let $superEq = $eq1.concat[$eq2]
                                let $superEq = [...$eq1, ...$eq2]; // ... signifie
                                console.log($superEq);

                                console.log("$eq1 :", $eq1);
                                console.log("...$eq1 :", ...$eq1);

                                // Objet
                                let $pers1 = {nom: "Dubois", prenom: "Luc"};
                                console.log($pers1);
                                console.log($pers1["nom"]);
                                console.log($pers1.nom);

                                // Voir tout les elements d'un objet.

                                for (let $i in $pers1) {
                                    console.log($pers1[$i])
                                }

                                /*
									for(let $v of $pers1) {
										console.log(v);
									}
									 */
                            </script>

                        </div>

                    </section>

                    <div class = "ui segment info message">2019‑09‑10 ‒ 09H00 :</div>

                    <div class = "ui segment">
                        <h4 id = "titleH2JSONJavaScriptObjectNotation">
                            <a href = "?#title-h2-table-of-contents">J.S.O.N. : JavaScriptObjectNotation</a>
                        </h4>

                        <p>La Classe est un type.<br> Le Objet est une instanciation de une classe.</p>

                        <pre><code class = "language-javascript line-numbers">
let $a = 25;
console.log("2 vaut " + $a + 1); // 2 vaut 251
console.log("2 vaut " + ($a + 1)); // 26
</code></pre>

                        <pre><code class = "language-javascript line-numbers">
let obj1 = {nom: "—", prenom: "—", holders:["—", "—"]};

obj1 {
    nom:
    prenom:
    hobbies:
}
// Un talbeau est un pointeur.

let obj2 = obj1;
// Copy de un pointeur.
// Attention vous avez deux ojets qui designe la meme chose…
obj2.nom = "Toto"; // . est -> invocation…
// C'est dangereux car quand il y a une modifcation dans l'un change les dexu.

// Clone
</code></pre>
                    </div>

                    <div class = "ui segment info message">2019‑09‑10 ‒ 13H00 :</div>
                    <div class = "ui segment">
                        <h4 id = "titleH32019Y09M10D13H00"><a href = "?#title-h2-table-of-contents">Coucou</a>
                        </h4>

                        <pre><code class = "language-html">&lt;h1 id="h">Coucou&lt;/h1>
// Pro modifier coucou, je vais devoir utiliser <b>.innerHTML()</b> ou <b>.innerText()</b>…
&lt;input type="text" id="t" value="coucou"/></code></pre>

                        <pre><code class = "language-javascript line-numbers">document
window.alert("Coucou");

document.getElementById();
// un seul ID est autorisé.
// Renvoi un element.
document.GetElementsByName();

// Les noms peuvent apparaitre plusieurs fois.
// Il renvoie un tableau de elements.</code></pre>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("h").innerHTML = "hello";
document.getElementById("t").value = "hello";
// . JS = -> PHP = invocation.

// Fonction anonyme : n'a pash de nom.</code></pre>
                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH3Exercice02a"><a href = "?#title-h2-table-of-contents">Ex2019_01.js</a></h3>

                        <pre><code class = "language-javascript line-numbers">// ex2019_01.js
"use strict";
//afficher les nombres de 1 à 10
for (let $i = 1; $i &lt;= 10; $i++) {
	console.log("i :", $i);
}
console.log("--------------------");

//afficher les nombres de 10 à 1
for (let $i = 10; $i &gt;= 1; $i--) {
	console.log("i :", $i);
}
console.log("--------------------");

//creer un tableau tab contenant les nombres 1, 5 et 9
let $tab = [1, 5, 9];

//afficher le contenu de tab sur des lignes séparées
for (let $i = 0; $i &lt; tab.length; $i++) {
	console.log(`tab[${$i}] :`, tab[$i]);
}
console.log("--------------------");

//afficher les éléments de tab &gt;=4
for (let $i = 0; $i &lt; tab.length; $i++) {
	if (tab[$i] &gt; 4) {
		console.log(`tab[${$i}] :`, tab[$i]);
	}
}
console.log("--------------------");

//créer un tableau tab2 reprenant les nombres de 1 à 1000
let $tableau2 = [];
for (let $i = 1; $i &lt;= 1000; $i++) {
	$tableau2.push($i);
}
console.log("$tab2 :", $tab2);

//ecrire une fonction moyenne qui renvoit la moyenne du tableau passé en argument
const MOYENNE = function($tab) {
	let $total = 0;
	for (let $i = 0; $i &lt; tab.length; $i++) {
		total = $total + $tab[i];
	}
	return $total / $tab.length;
};
console.log("moyenne(tab) :", MOYENNE(tab));
console.log("moyenne(tab2) :", MOYENNE(tab2));
console.log("moyenne([]) :", MOYENNE([]));
console.log('moyenne([2,4,9,"a"]) :', MOYENNE([2, 4, 9, "a"]));</code></pre>

                    </div>

                    <div class = "ui segment info message">2019‑09‑10 ‒ 13H35 :</div>

                    <div class = "ui segment">

                        <h3 id = "titleH3Exercice02a"><a href = "?#title-h2-table-of-contents">Ex2019_02.html</a></h3>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_02.html -->
&lt;input type="button"
      value="Saluer."
    onclick="ex02Saluer();" &gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_02.js
function ex02Saluer() {
    window.alert("Bõnë‑djôvrë.")
}</code></pre>

                        <div class = "ui segment">

                            <input type = "button"
                                   value = "Saluer."
                                   onclick = "ex02Saluer();">

                        </div>

                        <p><code>onclick</code> n'est pash la bonne manière de procéder.<br> On peut aussi faire un
                            <code>mouseover</code> ou <code>mouseout</code>.</p>

                        <script>
                            function ex02Saluer() {
                                window.alert("Bõnë‑djôvrë.")
                            }</script>
                    </div>

                    <div class = "ui segment">

                        <h3><a href = "?#title-h2-table-of-contents">Ex2019_02b.html</a></h3>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_02b.html --&gt;
&lt;input type="button"
         id="Ex02bBtnSaluer"
      value="Saluer"/&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_02b.js
"use strict";

//----------------------------------------------------------------------------------------
// code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init variables…
//----------------------------------------------------------------------------------------
document
    .getElementById("Ex02bBtnSaluer")
    .addEventListener("click", ex02bSaluer);
// Ajout de Écouteur de événements.
// En cas de click appeler ex02bSaluer();

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
function ex02bSaluer() {
    window.alert("Bõnë‑djôvrë.");
}</code></pre>

                        <div class = "ui segment">
                            <input type = "button"
                                   id = "Ex02bBtnSaluer"
                                   value = "Saluer"/>
                        </div>

                        <script>// js2019_02b.js

                            "use strict";

                            //-------------------------------------
                            // code appelé automatiquement
                            //-------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init variables, évènements...
                            //----------------------------------------------------------------------------------------
                            document
                                .getElementById("Ex02bBtnSaluer")
                                .addEventListener("click", ex02bSaluer);
                            // Ajout de Écouteur de événements.
                            // En cas de click appeler ex02bSaluer();

                            //-------------------------------------
                            // outils
                            //-------------------------------------
                            function ex02bSaluer() {
                                window.alert("Bõnë‑djôvrë.");
                            }</script>

                        <ul>
                            <li><b>txt :</b> texte.</li>
                            <li><b>tbl :</b> table</li>
                            <li><b>lg :</b> ligne</li>
                            <li><b>lbl :</b> label.</li>
                            <li><b>div :</b> div.</li>
                            <li><b>cbo :</b> combobox.</li>
                            <li><b>lst :</b> list.</li>
                            <li><b>opt :</b> option. (rond de choix.)</li>
                        </ul>

                    </div>

                    <div class = "ui segment">

                        <h3><a href = "?#title-h2-table-of-contents">Ex2019_02c.html</a></h3>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_02c.html --&gt;
&lt;input type = "button"
         id = "ex02cBtnSaluer"
      value = "Saluer." /&gt;

&lt;input type = "button"
         id = "ex02cBtnParler"
      value = "Parler." /&gt;

&lt;input type = "button"
         id = "ex02cBtnPartir"
      value = "Au revoir." /&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_02c.js
"use strict";

//----------------------------------------------------------------------------------------
// code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init constantes
//----------------------------------------------------------------------------------------
const PARLER = function() {
	window.alert("Fonction fléché « Blabla… » opérationnel.");
};

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
document.getElementById("ex02cBtnParler").addEventListener("click", function() {
	window.alert("Fonction anonyme « saluer » opérationnel.")
	// Fonction anonyme
});

document.getElementById("ex02cBtnSaluer").addEventListener("click", PARLER);
// Fonction stocké (dans une variable).

document.getElementById("ex02cBtnPartir").addEventListener("click", () =&gt; {
	window.alert("Fonction fléché « au revoir » opérationnel.")
// Fonction fléché.
});</code></pre>

                        <div class = "ui segment">

                            <!-- ex2019_02c.html -->
                            <input type = "button"
                                   id = "ex02cBtnSaluer"
                                   value = "Saluer."/>

                            <input type = "button"
                                   id = "ex02cBtnParler"
                                   value = "Parler."/>

                            <input type = "button"
                                   id = "ex02cBtnPartir"
                                   value = "Au revoir."/>

                        </div>

                        <script>// js2019_02c.js
                            "use strict";

                            //----------------------------------------------------------------------------------------
                            // code appelé automatiquement
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init constantes
                            //----------------------------------------------------------------------------------------
                            const PARLER = function () {
                                window.alert("Fonction fléché « Blabla… » opérationnel.");
                            };

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            document.getElementById("ex02cBtnParler").addEventListener("click", function () {
                                window.alert("Fonction anonyme « saluer » opérationnel.")
                                // Fonction anonyme
                            });

                            document.getElementById("ex02cBtnSaluer").addEventListener("click", PARLER);
                            // Fonction stocké (dans une variable).

                            document.getElementById("ex02cBtnPartir").addEventListener("click", () => {
                                window.alert("Fonction fléché « au revoir » opérationnel.")
                                // Fonction fléché.
                            });</script>

                    </div>

                    <div class = "ui segment">

                        <h3 id = "title03JavaScriptExercice03">
                            <a href = "?#title-h2-table-of-contents">Ex2019_03.html</a></h3>

                        <pre><code class = "language-html  line-numbers">&lt;!-- js2019_03.html --&gt;
&lt;label for = "ex03txtNom"&gt;Nom :&lt;/label&gt;

&lt;input type = "text"
         id = "ex03txtNom" /&gt;

&lt;input type = "button"
         id = "ex03btnSaluer"
      value = "Saluer" /&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_03.js

"use strict";

//----------------------------------------------------------------------------------------
// code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
document.getElementById("ex03btnSaluer").addEventListener("click", saluer);

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
function saluer() {

	const TEXT_NOM = document.getElementById("ex03txtNom");

	// let $nom = document.getElementById("ex03txtNom").value;
	let $nom = TEXT_NOM.value;

	if ($nom === "") {

		window.alert("Salut l'inconnu");

	} else {

		window.alert("Bonjour " + $nom);
	}

	// document.getElementById("ex03txtNom").value = "";
	TEXT_NOM.value = "";
	// document.getElementById("ex03txtNom").focus();
	TEXT_NOM.focus();
}</code></pre>

                        <div class = "ui segment">

                            <!-- js2019_03.html -->
                            <label for = "ex03txtNom">Nom: </label>

                            <input type = "text"
                                   id = "ex03txtNom"/>

                            <input type = "button"
                                   id = "ex03btnSaluer"
                                   value = "Saluer"/>

                        </div>

                        <script>// js2019_03.js

                            "use strict";

                            //----------------------------------------------------------------------------------------
                            // code appelé automatiquement
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            document.getElementById("ex03btnSaluer").addEventListener("click", ex03Saluer);
                            // Fonction stocké (dans une variable).

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------
                            function ex03Saluer() {

                                const TEXT_NOM = document.getElementById("ex03txtNom");
                                // Créé une variable ou une constante, permettant des recherches multiple dans le D.O.M. permettant aisni d'économiser du temps.

                                // let $nom = document.getElementById("ex03txtNom").value;
                                let $nom = TEXT_NOM.value;

                                if ($nom === "") {

                                    window.alert("Ʃaluθë lë in‑qô‑ʒnyë…");

                                } else {

                                    window.alert("Bonjour " + $nom);
                                }

                                // Quommênthë donner le focus. Il y a une fonction.
                                TEXT_NOM.value = "";
                                // document.getElementById("ex03txtNom").value = "";

                                // Assignation de valeur à « .value »…
                                TEXT_NOM.focus();
                                // document.getElementById("ex03txtNom").focus();

                                // Une fois effacé, il replacera le curseur dans la box de l'input.
                            }</script>

                    </div>

                    <div class = "ui segment message info">2019‑09‑10 ‒ 15H00 :</div>

                    <div class = "ui segment">

                        <h4 id = "titleH4LesÉvènements"><a href = "?#title-h2-table-of-contents">Le’s Évène‑mênt’s :</a>
                        </h4>

                        <ul>
                            <li><code class = "language-javascript">parseInt()</code></li>
                            <li><code class = "language-javascript">parseFlout()</code></li>
                            <li><code class = "language-javascript">onchange</code> : quand on sort.</li>
                            <li><code class = "language-javascript">onkeydown</code> : pression.</li>
                            <li><code class = "language-javascript">onkeypress</code> : pendant.</li>
                            <li><code class = "language-javascript">onkeyup</code> : re‑lâche‑mênt.</li>
                        </ul>

                        <h3 id = "titleH3Ex2019_04a"><a href = "?#title-h2-table-of-contents">Ex2019_04a :</a></h3>

                        <pre><code class = "language-html line-numbers">&lt;!-- js2019_04.html --&gt;
&lt;input type = "text"
	   id = "Ex04A1TxtNbreAvecButton"
	   placeholder = "Valeur 1"
	   title = "Valeur 1"&gt;

&lt;input type = "text"
	   id = "Ex04A2TxtNbreAvecButton"
	   placeholder = "Valeur 2"
	   title = "Valeur 2"&gt;

&lt;input type = "text"
	   value = "Somme"
	   id = "Ex04ATextResultAvecButton"
	   readonly
	   placeholder = "Résultat"
	   title = "Résultat"&gt;

&lt;input type = "button"
	   value = "Calculer"
	   id = "Ex04AButtonCalculer"&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_04.js

"use strict";

//----------------------------------------------------------------------------------------
// Code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const EX04_A_1_TXT_NBRE_AVEC_BUTTON = document.getElementById("Ex04A1TxtNbreAvecButton");
const EX04_A_2_TXT_NBRE_AVEC_BUTTON = document.getElementById("Ex04A2TxtNbreAvecButton");
const EX04_A_TXT_RESULT_AVEC_BUTTON = document.getElementById("Ex04ATextResultAvecButton");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
document.getElementById("Ex04AButtonCalculer").addEventListener("click", Ex04aCalculer);

//----------------------------------------------------------------------------------------
// Outils
//----------------------------------------------------------------------------------------
function Ex04aCalculer() {

	let $nombre1 = parseInt(EX04_A_1_TXT_NBRE_AVEC_BUTTON.value);
	let $nombre2 = parseInt(EX04_A_2_TXT_NBRE_AVEC_BUTTON.value);

	EX04_A_TXT_RESULT_AVEC_BUTTON.value = $nombre1 + $nombre2;
}</code></pre>
                        <div class = "ui segment">

                            <input type = "text"
                                   id = "Ex04A1TxtNbreAvecButton"
                                   placeholder = "Valeur 1"
                                   title = "Valeur 1">

                            <input type = "text"
                                   id = "Ex04A2TxtNbreAvecButton"
                                   placeholder = "Valeur 2"
                                   title = "Valeur 2">

                            <input type = "text"
                                   value = "Somme"
                                   id = "Ex04ATextResultAvecButton"
                                   readonly
                                   placeholder = "Résultat"
                                   title = "Résultat">

                            <input type = "button"
                                   value = "Calculer"
                                   id = "Ex04AButtonCalculer">

                        </div>

                        <script>// js2019_04.js

                            "use strict";

                            //----------------------------------------------------------------------------------------
                            // Code appelé automatiquement
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init constantes…
                            //----------------------------------------------------------------------------------------
                            const EX04_A_1_TXT_NBRE_AVEC_BUTTON = document.getElementById("Ex04A1TxtNbreAvecButton");
                            const EX04_A_2_TXT_NBRE_AVEC_BUTTON = document.getElementById("Ex04A2TxtNbreAvecButton");
                            const EX04_A_TXT_RESULT_AVEC_BUTTON = document.getElementById("Ex04ATextResultAvecButton");

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            document.getElementById("Ex04AButtonCalculer").addEventListener("click", Ex04aCalculer);

                            //----------------------------------------------------------------------------------------
                            // Outils
                            //----------------------------------------------------------------------------------------
                            function Ex04aCalculer() {

                                let $nombre1 = parseInt(EX04_A_1_TXT_NBRE_AVEC_BUTTON.value);
                                let $nombre2 = parseInt(EX04_A_2_TXT_NBRE_AVEC_BUTTON.value);

                                EX04_A_TXT_RESULT_AVEC_BUTTON.value = $nombre1 + $nombre2;
                            }</script>
                    </div>

                    <div class = "ui segment info message">2019‑09‑17 ‒ 15H31</div>

                    <div class = "ui segment">

                        <h3 id = "titleh3Ex2019_04b"><a href = "?#title-h2-table-of-contents">Ex2019_04b :</a></h3>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_04b.html --&gt;
&lt;input type = "text"
	   pattern = "valeur 1"
	   id = "Ex04bTxtNbre1AvecButton"
	   title = "Valeur 1"&gt;&lt;br&gt;

+&lt;br&gt;

&lt;input type = "text"
	   pattern = "valeur 2"
	   id = "Ex04bTxtNbre2AvecButton"
	   title = "Valeur 2"&gt;&lt;br&gt;

=&lt;br&gt;

&lt;input type = "text"
	   pattern = "Somme"
	   id = "Ex04bTextResultAvecButton"
	   title = "Résultat"
	   readonly&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">&lt;script&gt;// js2019_04b.js

"use strict";
//----------------------------------------------------------------------------------------
// Code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const EX04_B_TXT_NBRE_1_AVEC_BUTTON = document.getElementById("Ex04bTxtNbre1AvecButton");
const EX04_B_TXT_NBRE_2_AVEC_BUTTON = document.getElementById("Ex04bTxtNbre2AvecButton");
const EX04_B_TXT_RESULT_AVEC_BUTTON = document.getElementById("Ex04bTextResultAvecButton");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
EX04_B_TXT_NBRE_1_AVEC_BUTTON.addEventListener("keyup", Ex04bCalculer);
EX04_B_TXT_NBRE_2_AVEC_BUTTON.addEventListener("keyup", Ex04bCalculer);

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------

function Ex04bCalculer() {

	let $nombre1 = parseInt(EX04_B_TXT_NBRE_1_AVEC_BUTTON.value);
	let $nombre2 = parseInt(EX04_B_TXT_NBRE_2_AVEC_BUTTON.value);
	let $result = $nombre1 + $nombre2;

	EX04_B_TXT_RESULT_AVEC_BUTTON.value = $result;

	// Quommênthë ne pash Afficher NaN ?
}
&lt;/script&gt;</code></pre>

                        <div class = "ui segment">

                            <!-- ex2019_04b.html -->
                            <input type = "text"
                                   pattern = "valeur 1"
                                   id = "Ex04bTxtNbre1AvecButton"
                                   title = "Valeur 1"><br> +<br> <input type = "text"
                                                                        pattern = "valeur 2"
                                                                        id = "Ex04bTxtNbre2AvecButton"
                                                                        title = "Valeur 2"><br> =<br>
                            <input type = "text"
                                   pattern = "Somme"
                                   id = "Ex04bTextResultAvecButton"
                                   title = "Résultat"
                                   readonly>

                        </div>

                        <script>// js2019_04b.js

                            "use strict";
                            //----------------------------------------------------------------------------------------
                            // Code appelé automatiquement
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init constantes…
                            //----------------------------------------------------------------------------------------
                            const EX04_B_TXT_NBRE_1_AVEC_BUTTON = document.getElementById("Ex04bTxtNbre1AvecButton");
                            const EX04_B_TXT_NBRE_2_AVEC_BUTTON = document.getElementById("Ex04bTxtNbre2AvecButton");
                            const EX04_B_TXT_RESULT_AVEC_BUTTON = document.getElementById("Ex04bTextResultAvecButton");

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            EX04_B_TXT_NBRE_1_AVEC_BUTTON.addEventListener("keyup", Ex04bCalculer);
                            EX04_B_TXT_NBRE_2_AVEC_BUTTON.addEventListener("keyup", Ex04bCalculer);

                            //----------------------------------------------------------------------------------------
                            // Outils
                            //----------------------------------------------------------------------------------------

                            function Ex04bCalculer() {

                                let $nombre1 = parseInt(EX04_B_TXT_NBRE_1_AVEC_BUTTON.value);
                                let $nombre2 = parseInt(EX04_B_TXT_NBRE_2_AVEC_BUTTON.value);
                                let $result = $nombre1 + $nombre2;

                                EX04_B_TXT_RESULT_AVEC_BUTTON.value = $result;

                                // Quommênthë ne pash Afficher NaN ?
                            }
                        </script>
                    </div>

                    <div class = "ui segment">
                        <h5 id = "titleH4SiLObjetEtaitUneTable">
                            <a href = "?#title-h2-table-of-contents">Si l'objet était une table :</a></h5>
                        <ul>
                            <li><b>garnir</b> serait une <code>méthode</code></li>
                            <li><b>hauteur</b> serait une <code>propriété</code></li>
                        </ul>
                    </div>

                    <div class = "ui segment">
                        <h5 id = "titleH4EcouteurDEvenement">
                            <a href = "?#title-h2-table-of-contents">Écouteur de évène‑mênt</a></h5>
                        <p>Nous ne voulons pash de bouton,<br> il faut donc ajouter un écouteur de évènement.</p>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("txtNbr1").value = "___";</code></pre>

                        <h6 id = "titleH5AddEventListenerClick">
                            <a href = "?#title-h2-table-of-contents">.addEventListener("click") :</a></h6>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("btnCalculer").addEventListener("click", function() {------});</code></pre>

                        <h6 id = "titleH5AddEventListenerChange">
                            <a href = "?#title-h2-table-of-contents">.addEventListener("change") :</a></h6>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("txtNbr2").addEventListener("change", function() {------});</code></pre>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("btnCalculer").addEventListener("change", function() {------});</code></pre>

                        <h6 id = "titleH5AddEventListenerKeyUp">
                            <a href = "?#title-h2-table-of-contents">.addEventListener("keyup") :</a></h6>

                        <pre><code class = "language-javascript line-numbers">document.getElementById("btnCalculer").addEventListener("keyup", function() {------});</code></pre>
                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleh3Ex2019_04c"><a href = "?#title-h2-table-of-contents">Ex2019_04c :</a></h3>

                        <div class = "ui segment info message">
                            <p>Entrez les nombres et choisissez le signe d'opération.</p></div>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_04c --&gt;
&lt;input type = "text"
	   id = "Ex04cTxtNbre1"
	   title = "Nombre un."
	   placeholder = "Nombre un"&gt;

&lt;select name = ""
		id = "Ex04cCboOperator"
		title = "Opérateur."&gt;

	&lt;!-- Dans un combo‑box (C.BO), il y a toujours une êlémênt choisie. --&gt;
	&lt;option value = "+" selected&gt;+&lt;/option&gt;
	&lt;option value = "-"&gt;-&lt;/option&gt;
	&lt;option value = "×"&gt;×&lt;/option&gt;
	&lt;option value = "÷"&gt;÷&lt;/option&gt;

&lt;/select&gt;

&lt;input type = "text"
	   id = "Ex04cTxtNbre2"
	   title = "Nombre deux."
	   placeholder = "Nombre deux"&gt;

=&lt;br&gt;

&lt;input type = "text"
	   id = "Ex04cTxtResult"
	   title = "Résultat."
	   placeholder = "Résultat"
	   readonly&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_04c.js

"use strict";
//----------------------------------------------------------------------------------------
// Code appelé automatiquement
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const EX04_C_TXT_NOMBRE_1 = document.getElementById("Ex04cTxtNbre1");
const EX04_C_CBO_OPERATOR = document.getElementById("Ex04cCboOperator");
const EX04_C_TXT_NOMBRE_2 = document.getElementById("Ex04cTxtNbre2");
const EX04_C_TXT_RESULT = document.getElementById("Ex04cTxtResult");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
EX04_C_TXT_NOMBRE_1.addEventListener("keyup", Ex04cCalculer);
EX04_C_TXT_NOMBRE_2.addEventListener("keyup", Ex04cCalculer);
EX04_C_CBO_OPERATOR.addEventListener("change", Ex04cCalculer);
// Il faut utiliser un change car des que quelque chose change il active la méthode.

//----------------------------------------------------------------------------------------
// outils…
//----------------------------------------------------------------------------------------

function Ex04cCalculer() {
	let $nombreUn = parseInt(EX04_C_TXT_NOMBRE_1.value);
	let $nombre2 = parseInt(EX04_C_TXT_NOMBRE_2.value);
	let $result;

	switch (EX04_C_CBO_OPERATOR.value) {
		case "+":
			$result = $nombreUn + $nombre2;
			break;
		case "-":
			$result = $nombreUn - $nombre2;
			break;
		case "×":
			$result = $nombreUn * $nombre2;
			break;

		case "÷":
			$result = $nombreUn / $nombre2;
			break;
		default:
			break;
	}

	EX04_C_TXT_RESULT.value = $result;
}</code></pre>

                        <div class = "ui segment">
                            <!-- ex2019_04c -->
                            <input type = "text"
                                   id = "Ex04cTxtNbre1"
                                   title = "Nombre un."
                                   placeholder = "Nombre un">

                            <select name = ""
                                    id = "Ex04cCboOperator"
                                    title = "Opérateur.">

                                <!-- Dans un combo‑box (C.BO), il y a toujours une êlémênt choisie. -->
                                <option value = "+"
                                        selected>+
                                </option>
                                <option value = "-">-</option>
                                <option value = "×">×</option>
                                <option value = "÷">÷</option>

                            </select>

                            <input type = "text"
                                   id = "Ex04cTxtNbre2"
                                   title = "Nombre deux."
                                   placeholder = "Nombre deux">

                            =<br>

                            <input type = "text"
                                   id = "Ex04cTxtResult"
                                   title = "Résultat."
                                   placeholder = "Résultat"
                                   readonly>

                        </div>

                        <script>// js2019_04c.js

                            "use strict";
                            //----------------------------------------------------------------------------------------
                            // Code appelé automatiquement
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init constantes…
                            //----------------------------------------------------------------------------------------
                            const EX04_C_TXT_NOMBRE_1 = document.getElementById("Ex04cTxtNbre1");
                            const EX04_C_CBO_OPERATOR = document.getElementById("Ex04cCboOperator");
                            const EX04_C_TXT_NOMBRE_2 = document.getElementById("Ex04cTxtNbre2");
                            const EX04_C_TXT_RESULT = document.getElementById("Ex04cTxtResult");

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            EX04_C_TXT_NOMBRE_1.addEventListener("keyup", Ex04cCalculer);
                            EX04_C_TXT_NOMBRE_2.addEventListener("keyup", Ex04cCalculer);
                            EX04_C_CBO_OPERATOR.addEventListener("change", Ex04cCalculer);
                            // Il faut utiliser un change car des que quelque chose change il active la méthode.

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------

                            function Ex04cCalculer() {
                                let $nombreUn = parseInt(EX04_C_TXT_NOMBRE_1.value);
                                let $nombre2 = parseInt(EX04_C_TXT_NOMBRE_2.value);
                                let $result;

                                switch (EX04_C_CBO_OPERATOR.value) {
                                    case "+":
                                        $result = $nombreUn + $nombre2;
                                        break;
                                    case "-":
                                        $result = $nombreUn - $nombre2;
                                        break;
                                    case "×":
                                        $result = $nombreUn * $nombre2;
                                        break;

                                    case "÷":
                                        $result = $nombreUn / $nombre2;
                                        break;
                                    default:
                                        break;
                                }

                                EX04_C_TXT_RESULT.value = $result;
                            }</script>
                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH3Ex2019_03d"><a href = "?#title-h2-table-of-contents">Ex2019_04d.html</a>
                        </h3>

                        <div class = "ui segment message info">
                            <p>Quommênthë le’s boutton’s radio savent que une fois sélectionné,<br> dés‑active le’s quatre’s choix,<br> car ils sont lié par le même « name »…
                        </div>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_04d.html --&gt;
&lt;input type = "text"
	   id = "ex04dTexteNombre1"
	   title = "Nombre un."
	   placeholder = "Nombre un"&gt;

&lt;div id = "Ex04dCboGroupeOpérateur"&gt;

	&lt;!-- Dans un combo‑box il y a toujours un élément choisi. --&gt;
	&lt;input type = "radio"
		   id = "ex04dOptOp+"
		   name = "operator"
		   value = "+"
		   title = "Opérateur plus."&gt;

	 + &lt;br&gt;

	&lt;input type = "radio"
		   id = "ex04dOptOp-"
		   name = "operator"
		   value = "-"
		   title = "Opérateur moins."&gt;

	 - &lt;br&gt;

	&lt;input type = "radio"
		   id = "ex04dOptOp×"
		   name = "operator"
		   value = "×"
		   title = "Opérateur fois."&gt;

	 × &lt;br&gt;

	&lt;input type = "radio"
		   id = "ex04dOptOp÷"
		   name = "operator"
		   value = "÷"
		   title = "Opérateur divisé."&gt;

	 ÷ &lt;br&gt;

&lt;/div&gt;

&lt;input type = "text"
	   id = "ex04dTexteNombre2"
	   title = "Nombre deux."
	   placeholder = "Nombre deux"&gt;&lt;br&gt;

=&lt;br&gt;

&lt;input type = "text"
	   id = "ex04dTexteRésultat"
	   title = "Nombre un."
	   placeholder = "Résultat"
	   readonly&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_04d.js

"use strict";

valeurBoutonsRadio("operator");

//----------------------------------------------------------------------------------------
// Qode appelé auto‑maθi‑que‑mênθ
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const EX04_D_TEXTE_NOMBRE_1 = document.getElementById("ex04dTexteNombre1");
const EX04_D_TEXTE_NOMBRE_2 = document.getElementById("ex04dTexteNombre2");
const EX04_D_TEXTE_RESULT = document.getElementById("ex04dTexteRésultat");
// const EX04_D_OPT_OP_PLUS = document.getElementById("ex04dOptOp");            // Option opérateur.
// const EX04_D_OPT_OP_MINUS = document.getElementById("ex04dOptOp-");          // Option opérateur.
// const EX04_D_OPT_OP_MULTIPLICATION = document.getElementById("ex04dOptOp×"); // Option opérateur.
// const EX04_D_OPT_OP_DIVISION = document.getElementById("ex04dOptOp÷");       // Option opérateur.
const EX04_D_COMBO_BOX_GROUPE_OPÉRATEUR = document.getElementById("Ex04dCboGroupeOpérateur");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
EX04_D_TEXTE_NOMBRE_1.addEventListener("keyup", ex04dCalculer);
EX04_D_TEXTE_NOMBRE_2.addEventListener("keyup", ex04dCalculer);
// EX04_D_OPT_OP_PLUS.addEventListener("click", ex04dCalculer);
// EX04_D_OPT_OP_MINUS.addEventListener("click", ex04dCalculer);
// EX04_D_OPT_OP_MULTIPLICATION.addEventListener("click", ex04dCalculer);
// EX04_D_OPT_OP_DIVISION.addEventListener("click", ex04dCalculer);
EX04_D_COMBO_BOX_GROUPE_OPÉRATEUR.addEventListener("click", ex04dCalculer);

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
function ex04dCalculer() {
	let $ex04dNombreUn = parseInt(EX04_D_TEXTE_NOMBRE_1.value);
	let $ex04dNombreDeux = parseInt(EX04_D_TEXTE_NOMBRE_2.value);
	let $ex04dRésultat;

	switch (valeurBoutonsRadio("operator")) {
		case "+":
			$ex04dRésultat = $ex04dNombreUn + $ex04dNombreDeux;
			break;
		case "-":
			$ex04dRésultat = $ex04dNombreUn - $ex04dNombreDeux;
			break;
		case "×":
			$ex04dRésultat = $ex04dNombreUn * $ex04dNombreDeux;
			break;

		case "÷":
			$ex04dRésultat = $ex04dNombreUn / $ex04dNombreDeux;
			break;
		default:
			break;
	}
	EX04_D_TEXTE_RESULT.value = $ex04dRésultat;
}

function valeurBoutonsRadio($grpBoutonsRadio) {
	let $tabBoutonsRadio = document.getElementsByName($grpBoutonsRadio);

	for (let $i = 0; $i &lt; $tabBoutonsRadio.length; $i++) {
		if ($tabBoutonsRadio[$i].checked) {
			return $tabBoutonsRadio[$i].value;
		}
	}

	return null;
}</code></pre>

                        <div class = "ui segment">
                            <p>Entrez vos nombres et choisissez votre opérateur :</p>

                            <!-- ex2019_04d.html -->
                            <input type = "text"
                                   id = "ex04dTexteNombre1"
                                   title = "Nombre un."
                                   placeholder = "Nombre un">

                            <div id = "Ex04dCboGroupeOpérateur">

                                <!-- Dans un combo‑box il y a toujours un élément choisi. -->
                                <input type = "radio"
                                       id = "ex04dOptOp+"
                                       name = "operator"
                                       value = "+"
                                       title = "Opérateur plus.">

                                &nbsp;+&nbsp;<br>

                                <input type = "radio"
                                       id = "ex04dOptOp-"
                                       name = "operator"
                                       value = "-"
                                       title = "Opérateur moins.">

                                &nbsp;-&nbsp;<br>

                                <input type = "radio"
                                       id = "ex04dOptOp×"
                                       name = "operator"
                                       value = "×"
                                       title = "Opérateur fois.">

                                &nbsp;×&nbsp;<br>

                                <input type = "radio"
                                       id = "ex04dOptOp÷"
                                       name = "operator"
                                       value = "÷"
                                       title = "Opérateur divisé.">

                                &nbsp;÷&nbsp;<br>
                            </div>

                            <input type = "text"
                                   id = "ex04dTexteNombre2"
                                   title = "Nombre deux."
                                   placeholder = "Nombre deux"><br>

                            =<br>

                            <input type = "text"
                                   id = "ex04dTexteRésultat"
                                   title = "Nombre un."
                                   placeholder = "Résultat"
                                   readonly>

                        </div>

                        <script>// js2019_04d.js

                            "use strict";

                            valeurBoutonsRadio("operator");

                            //────────────────────────────────────────────────────────────────────────
                            // Qode appelé auto‑maθi‑que‑mênθ
                            //────────────────────────────────────────────────────────────────────────

                            const EX04_D_TEXTE_NOMBRE_1 = document.getElementById("ex04dTexteNombre1");
                            const EX04_D_TEXTE_NOMBRE_2 = document.getElementById("ex04dTexteNombre2");
                            const EX04_D_TEXTE_RESULT = document.getElementById("ex04dTexteRésultat");
                            // const EX04_D_OPT_OP_PLUS = document.getElementById("ex04dOptOp");            // Option opérateur.
                            // const EX04_D_OPT_OP_MINUS = document.getElementById("ex04dOptOp-");          // Option opérateur.
                            // const EX04_D_OPT_OP_MULTIPLICATION = document.getElementById("ex04dOptOp×"); // Option opérateur.
                            // const EX04_D_OPT_OP_DIVISION = document.getElementById("ex04dOptOp÷");       // Option opérateur.
                            const EX04_D_COMBO_BOX_GROUPE_OPÉRATEUR = document.getElementById("Ex04dCboGroupeOpérateur");

                            EX04_D_TEXTE_NOMBRE_1.addEventListener("keyup", ex04dCalculer);
                            EX04_D_TEXTE_NOMBRE_2.addEventListener("keyup", ex04dCalculer);
                            // EX04_D_OPT_OP_PLUS.addEventListener("click", ex04dCalculer);
                            // EX04_D_OPT_OP_MINUS.addEventListener("click", ex04dCalculer);
                            // EX04_D_OPT_OP_MULTIPLICATION.addEventListener("click", ex04dCalculer);
                            // EX04_D_OPT_OP_DIVISION.addEventListener("click", ex04dCalculer);
                            EX04_D_COMBO_BOX_GROUPE_OPÉRATEUR.addEventListener("click", ex04dCalculer);

                            //────────────────────────────────────────────────────────────────────────
                            // Outils
                            //────────────────────────────────────────────────────────────────────────

                            function ex04dCalculer() {
                                let $ex04dNombreUn = parseInt(EX04_D_TEXTE_NOMBRE_1.value);
                                let $ex04dNombreDeux = parseInt(EX04_D_TEXTE_NOMBRE_2.value);
                                let $ex04dRésultat;

                                switch (valeurBoutonsRadio("operator")) {
                                    case "+":
                                        $ex04dRésultat = $ex04dNombreUn + $ex04dNombreDeux;
                                        break;
                                    case "-":
                                        $ex04dRésultat = $ex04dNombreUn - $ex04dNombreDeux;
                                        break;
                                    case "×":
                                        $ex04dRésultat = $ex04dNombreUn * $ex04dNombreDeux;
                                        break;

                                    case "÷":
                                        $ex04dRésultat = $ex04dNombreUn / $ex04dNombreDeux;
                                        break;
                                    default:
                                        break;
                                }
                                EX04_D_TEXTE_RESULT.value = $ex04dRésultat;
                            }

                            function valeurBoutonsRadio($grpBoutonsRadio) {
                                let $tabBoutonsRadio = document.getElementsByName($grpBoutonsRadio);

                                for (let $i = 0; $i < $tabBoutonsRadio.length; $i++) {
                                    if ($tabBoutonsRadio[$i].checked) {
                                        return $tabBoutonsRadio[$i].value;
                                    }
                                }

                                return null;
                            }</script>
                    </div>

                    <div class = "ui segment">

                        <h3 id = "titleH3Ex2019_04e">
                            <a href = "?#title-h2-table-of-contents">Ex2019_04e.html {Jamais corrigé par le prof.}</a>
                        </h3>

                        <blockquote>
                            <ul>
                                <li>nom : min 2 caracteres.</li>
                                <li>age : entre 0…130.</li>
                                <li>sexe : F / P ; ôb‑liga‑tôrie.</li>
                                <li>Marié : checkbox.</li>
                                <li>Envoyer.</li>
                        </blockquote>

                        <p>Mettre fichier prof ici. Code PrismJS, puis code reel.</p>

                        <code class = "language-javascript">.this = document.getElementById("chkMarie")</code>

                        <p>Si vous sélectionnez marié et mettez un nom de conjoin et décoché la case,<br> le nom reste en‑regi‑ϟtré,<br> pro empêcher cela, il faut faire :<br>
                            <code class = "language-javascript">$txtNomConj.value = null;</code></p>

                        <code class = "language-javascript">$pNomConj.style.visibility = "hidden";</code>
                        <p>afficher le require lorsque le CheckBox est coché.<br> // Suggestion de un élève, afin de pouvoir utiliser un REQUIRE.
                        </p>

                        <pre><code class = "language-javascript line-numbers">if () {
	$pNomConj.style.display = "block";
	document.getElementById("chkMarie").setAttribute("required", "");
} // ELSE
$pNomConj.style.display = "none";
	document.getElementById("chkMarie").removeAttribute("required", "");</code></pre>

                        <script>
                            /*
							if () {
								$pNomConj.style.display = "block";
								document.getElementById("chkMarie").setAttribute("required", "");
							} // ELSE
							$pNomConj.style.display = "none";
							getElementById("chkMarie").removeAttribute("required", "");
							$/
							 */
                        </script>

                        <pre><code class = "language-html line-numbers">&lt;!-- lblMarie = label marié. --&gt;
&lt;!-- pNomConj = Prénom du Conjoint. --&gt;
&lt;!-- chkMarie = CheckBox Marié. --&gt;</code></pre>

                        <div class = "ui segment">

                            <h4 id="titleH4MozillaDocumentationDefinition"><a href="?#title-h2-table-of-contents">Mozilla documentation definition :</a></h4>
                            <ul>
                                <li>
                                    <strong><a href = "https://developer.mozilla.org/fr/docs/Web/API/Node/innerText"
                                               target = "_blank"><code class = "language-javascript">.innerText</code></a> :</strong> will show the value as is and ignores any HTML formatting which may be included.
                                </li>

                                <li>
                                    <strong><a href = "https://developer.mozilla.org/fr/docs/Web/API/Element/innertHTML"
                                               target = "_blank"><code class = "language-javascript">.innerHTML</code></a> :</strong> will show the value and apply any HTML formatting included.
                                </li>

                                <li>
                                    <strong><code class = "language-javascript">.label</code> :</strong> appears to be the same as innerText,<br>so I can't see the difference.
                                </li>

                                <li>
                                    <strong><code class = "language-javascript">.text</code> :</strong> appears to be the same as innerText but the jQuery shorthand version.
                                </li>

                                <li>
                                    <strong><a href = "https://developer.mozilla.org/fr/docs/Web/API/Node/textContent"
                                               target = "_blank"><code class = "language-javascript">.textContent</code></a> :</strong> appears to the same as innerText but keeps formatting (such as \n).
                                </li>
                                <li>
                                    <strong><a href = "https://developer.mozilla.org/fr/docs/Web/API/Node/outerText"
                                               target = "_blank"><code class = "language-javascript">.outerText</code></a> :</strong> appears to be the same as innerText.
                                </li>
                            </ul>

                            <p>Note that while
                                <code class = "language-javascript">.textContent</code> gets the content of all elements,<br>including &lt;script> and &lt;style> elements,
                                <br>the mostly equivalent IE-specific property,
                                <code class = "language-javascript">.innerText</code>, does not.
                            </p>

                            <p>
                                <code class = "language-javascript">.innerText</code> is also aware of style and will not return the text of hidden elements,<br>whereas textContent will.
                            </p>

                            <p>As
                                <code class = "language-javascript">.innerText</code> is aware of CSS styling, it will trigger a reflow,<br>whereas textContent will not.
                            </p>

                            <p>So
                                <code class = "language-javascript">.innerText</code> will not include text that is hidden by CSS,<br> but textContent will.
                            </p>

                            <h5 id = "titleH5FireFoxSupport">
                                <a href = "?#title-h2-table-of-contents"><a href="?#title-h2-table-of-contents">FireFox support :</a></a></h5>
                            <ul>
                                <li>
                                    <a href = "https://developer.mozilla.org/en-US/docs/Web/API/Node/textContent"
                                       target = "_blank">https://developer.mozilla.org/en-US/docs/Web/API/Node/textContent</a>
                                </li>
                            </ul>
                            <h5 id="titleH5DifferenceFromInnerText"><a href = "?#title-h2-table-of-contents">Differences vrom innerText</a></h5>

                            <p>Don't get confused by the differences between
                                <code class = "language-javascript">Node.textContent</code> and
                                <code class = "language-javascript">HTMLElement.innerText</code>.<br> Although the names seem similar,<br> there are important differences:
                            </p>

                            <p>
                                <code class = "language-javascript">.textContent</code> gets the content of all elements, including &lt;script> and &lt;style> elements. In contrast, innerText only shows “human-readable” elements.<br>
                                <code class = "language-javascript">.textContent</code> returns every element in the node.<br> In contrast,
                                <code class = "language-javascript">.innerText</code> is aware of styling and won’t return the text of “hidden” elements.<br> Moreover, since
                                <code class = "language-javascript">.innerText</code> takes CSS styles into account, reading the value of
                                <code class = "language-javascript">.innerText</code> triggers a reflow to ensure up-to-date computed styles. (Reflows can be computationally expensive, and thus should be avoided when possible.)<br>Unlike
                                <code class = "language-javascript">.textContent</code>, altering
                                <code class = "language-javascript">.innerText</code> in Internet Explorer (version 11 and below) removes child nodes from the element and permanently destroys all descendant text nodes. It is impossible to insert the nodes again into any other element or into the same element anymore.
                            </p>

                            <h5 id="titleH5DifferenceFromInnerHTML"><a href="?#title-h2-table-of-contents">Differences vrom <code class = "language-javascript">.innerHTML</a></code></h5>

                            <p>
                                <code class = "language-javascript">Element.innerHTML</code> returns HTML, as its name indicates. Sometimes people use
                                <code class = "language-javascript">.innerHTML</code> to retrieve or write text inside an element, but textContent has better performance because its value is not parsed as HTML.<br> Moreover, using
                                <code class = "language-javascript">.textContent</code> can prevent
                                <abbr title = "">X.S.S.</abbr> attacks.
                            </p>
                        </div>

                        <h5 id = "titleH5DateSystemInJavaScript"><a href = "?#title-h2-table-of-contents">Date</a></h5>

                        <pre><code class = "language-javascript line-numbers">let $aujourdHui = new Date();
let $dateDeNaissance = new Date(2005, 9, 30);
let $atniVersArie = new Date(auj.getFullYear(), $dateDeNaissance.getMonth(), $dateDeNaissance.getDate());
return $aujourdHui.getFullYear() - $dateDeNaissance.getFullYear() - ($atniVersArie &gt; aujourdHui ? 1 : 0);</code></pre>

                        <script>
                            /*
							let $aujourdHui = new Date();
							let $dateDeNaissance = new Date(2005, 9, 30);
							let $atniVersArie = new Date(auj.getFullYear(), $dateDeNaissance.getMonth(), $dateDeNaissance.getDate());
							return $aujourdHui.getFullYear() - $dateDeNaissance.getFullYear() - ($atniVersArie > aujourdHui ? 1 : 0);
							 */
                        </script>

                        <h5 id = "titleH5FonctionFléché"><a href = "?#title-h2-table-of-contents">Fonction fléché :</a>
                        </h5>

                        <pre><code class = "language-javascript line-numbers">// Fonction fleché {ajouté} toujours anonyme (js04 manipulation, ajouté)

// Parentese fléché puis travaillé effectwé. :
() => {} si on ne renvoi que un return : on peut mettre juste le nom de variable => x

let var1 = function () {return 2 * x;}&lt;br&gt; var1();

(x) =&gt; {return 2 * x};

(x) => 2 * x;</code></pre>

                    </div>

                    <div class = "ui segment">
                        <legend><h3 id = "titleH3js2019_05_timers">
                                <a href = "?#title-h2-table-of-contents">Ex2019_05_timers</a></h3></legend>

                        <div class = "ui segment info message">2019‑09‑24 14h20.</div>

                        <pre><code class = "language-html line-numbers">&lt;!-- js2019_05_timers.html --&gt;
&lt;p&gt;Affiche salut après un délait de 3 seconde’s.&lt;/p&gt;

&lt;input type="button" id="ex05BtnSaluer" value="1° Saluer." /&gt;
&lt;input type="button" id="ex05ex05BtnStop" value="1° Stop le compte à rebours." /&gt;&lt;br&gt;&lt;br&gt;

&lt;p&gt;Affiche la fonction salut qui créé un time‑stamp à chaque seconde.&lt;/p&gt;

&lt;input type="button" id="ex05BtnSaluerTwo" value="2° Saluer." /&gt;
&lt;input type="button" id="ex05ex05BtnStopTwo" value="2° Stop le compte à rebours." /&gt;&lt;br /&gt;

&lt;p id="ex05AfficheLeChrono"&gt;&lt;/p&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_05_timers.js
"use strict";

//----------------------------------------------------------------------------------------
// Qode appelé auto‑maθi‑que‑mênθ
//----------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------

document.getElementById("ex05BtnSaluer").addEventListener("click", ex05SaluerDs3Sec);
document.getElementById("ex05ex05BtnStop").addEventListener("click", ex05StopperSaluer);

document.getElementById("ex05BtnSaluerTwo").addEventListener("click", $ex05SaluerChaqueSec);
document.getElementById("ex05ex05BtnStopTwo").addEventListener("click", ex05StopperSaluerTwo);

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const EX05_AFFICHE_LE_CHRONO = document.getElementById("ex05AfficheLeChrono");
/*
document.getElementById("ex05BtnSaluer3").addEventListener("click", function() {
setTimeout(function() {
alert("Salut 3");
}, 10000);
});
*/

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
let $ex05TimerSalut = null; // variable globale
function ex05SaluerDs3Sec() {
	if ($ex05TimerSalut == null) {
		$ex05TimerSalut = setTimeout(ex05Ssaluer, 3000);
		console.log("$ex05TimerSalut :", $ex05TimerSalut);
	}
}

function ex05StopperSaluer() {
	clearTimeout($ex05TimerSalut);
	$ex05TimerSalut = null;
	console.log("$ex05TimerSalut :", $ex05TimerSalut);
}

function ex05Ssaluer() {
	alert("Salut");
	$ex05TimerSalut = null;
}

//-------------------------------------
// variable globale
let $ex05TimerSalut2 = null;

function $ex05SaluerChaqueSec() {
	if ($ex05TimerSalut2 == null) {
		$ex05TimerSalut2 = setInterval(ex05SalutVersionDeux, 1000);
	}
}

function ex05StopperSaluerTwo() {
	clearInterval($ex05TimerSalut2);
	$ex05TimerSalut2 = null;
}

function ex05SalutVersionDeux() {

	let $ex05Text;
	// $ex05Text = console.log(new Date());
	$ex05Text = new Date();
	console.log($ex05Text);

	EX05_AFFICHE_LE_CHRONO.innerHTML = $ex05Text;
}</code></pre>

                        <div class = "ui segment">

                            <!-- js2019_05_timers.html -->
                            <p>Affiche salut après un délait de 3 seconde’s.</p>

                            <input type = "button"
                                   id = "ex05BtnSaluer"
                                   value = "1° Saluer."
                                   style = "width: 8em; text-align: left;"/> <input type = "button"
                                                                                    id = "ex05ex05BtnStop"
                                                                                    value = "1° Stop le compte à rebours."
                                                                                    style = "width: 20em; text-align: left;"/><br><br>

                            <p>Affiche la fonction salut qui créé un time‑stamp à chaque seconde.</p>

                            <input type = "button"
                                   id = "ex05BtnSaluerTwo"
                                   value = "2° Saluer."
                                   style = "width: 8em;text-align: left;"/> <input type = "button"
                                                                                   id = "ex05ex05BtnStopTwo"
                                                                                   value = "2° Stop le compte à rebours."
                                                                                   style = "width: 20em;text-align: left;"/><br/>

                            <p id = "ex05AfficheLeChrono"></p>
                        </div>

                        <script>// js2019_05_timers.js
                            "use strict";

                            //----------------------------------------------------------------------------------------
                            // Qode appelé auto‑maθi‑que‑mênθ
                            //----------------------------------------------------------------------------------------

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            document.getElementById("ex05BtnSaluer").addEventListener("click", ex05SaluerDs3Sec);
                            document.getElementById("ex05ex05BtnStop").addEventListener("click", ex05StopperSaluer);

                            document.getElementById("ex05BtnSaluerTwo").addEventListener("click", $ex05SaluerChaqueSec);
                            document.getElementById("ex05ex05BtnStopTwo").addEventListener("click", ex05StopperSaluerTwo);

                            //----------------------------------------------------------------------------------------
                            // init constantes…
                            //----------------------------------------------------------------------------------------
                            const EX05_AFFICHE_LE_CHRONO = document.getElementById("ex05AfficheLeChrono");
                            /*
							document.getElementById("ex05BtnSaluer3").addEventListener("click", function() {
							setTimeout(function() {
							alert("Salut 3");
							}, 10000);
							});
							*/

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------
                            let $ex05TimerSalut = null; // variable globale
                            function ex05SaluerDs3Sec() {
                                if ($ex05TimerSalut == null) {
                                    $ex05TimerSalut = setTimeout(ex05Ssaluer, 3000);
                                    console.log("$ex05TimerSalut :", $ex05TimerSalut);
                                }
                            }

                            function ex05StopperSaluer() {
                                clearTimeout($ex05TimerSalut);
                                $ex05TimerSalut = null;
                                console.log("$ex05TimerSalut :", $ex05TimerSalut);
                            }

                            function ex05Ssaluer() {
                                alert("Salut");
                                $ex05TimerSalut = null;
                            }

                            //-------------------------------------
                            let $ex05TimerSalut2 = null; // variable globale

                            function $ex05SaluerChaqueSec() {
                                if ($ex05TimerSalut2 == null) {
                                    $ex05TimerSalut2 = setInterval(ex05SalutVersionDeux, 1000);
                                }
                            }

                            function ex05StopperSaluerTwo() {
                                clearInterval($ex05TimerSalut2);
                                $ex05TimerSalut2 = null;
                            }

                            function ex05SalutVersionDeux() {

                                let $ex05Text;
                                // $ex05Text = console.log(new Date());
                                $ex05Text = new Date();
                                console.log($ex05Text);

                                EX05_AFFICHE_LE_CHRONO.innerHTML = $ex05Text;
                            }</script>
                    </div>

                    <div class = "ui segment">
                        <legend><h3 id = "titleH3js2019_06_timers">
                                <a href = "?#title-h2-table-of-contents">Ex2019_06_timers</a></h3></legend>

                        <div class = "ui segment info message">2019‑09‑24 14h28.</div>

                        <pre><code class = "language-html line-numbers">&lt;!-- js2019_06_timers.html --&gt;
&lt;input type = "button"
       value = "Start"
	   id = "ex06BtnStart" &gt;

&lt;input type = "button"
       value = "Stop"
       id = "ex06BtnStop" &gt;

&lt;input type = "button"
       value = "Reset"
       id = "ex06BtnReset" &gt;

&lt;label for = "ex06Display" &gt;

	&lt;input type = "text"
		   value = "Display"
		   id = "ex06DisplayTextCompteur"
		   readonly &gt;

&lt;/label &gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// js2019_06_timers.js
    "use strict";

//----------------------------------------------------------------------------------------
// init variables…
//----------------------------------------------------------------------------------------
/*
let $ex06ButtonStart = function.getElementById("ex06BtnStart").addEventListener("click");
let $ex06ButtonStop = function.getElementById("ex06BtnStop").addEventListener("click");
let $ex06ButtonReset = function.getElementById("ex06BtnReset").addEventListener("click");
*/

let $ex06ButtonStart = document.getElementById("ex06BtnStart");
let $ex06ButtonStop = document.getElementById("ex06BtnStop");
let $ex06ButtonReset = document.getElementById("ex06BtnReset");

let $ex06TextCompteur = document.getElementById("ex06DisplayTextCompteur");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
$ex06ButtonStart.addEventListener("click", startCompteur);
$ex06ButtonStop.addEventListener("click", stopCompteur);
$ex06ButtonReset.addEventListener("click", resetCompteur);

//----------------------------------------------------------------------------------------
// code appelé automatiquement
//----------------------------------------------------------------------------------------
resetCompteur(); // Reset compteur.

// console.log(new Date());

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------

// variable globale
let $ChronoCompteur = null;

function startCompteur() {
    if ($ChronoCompteur == null) {
        $ChronoCompteur = setInterval(IncrementeCompteur, 1000);
        $ex06ButtonStart.setAttribute("disabled", "");
        $ex06ButtonStop.removeAttribute("disabled");
        $ex06ButtonReset.setAttribute("disabled", "");
    }
}

function stopCompteur() {
    clearInterval($ChronoCompteur);
    $ChronoCompteur = null;
    $ex06ButtonStart.removeAttribute("disabled");
    $ex06ButtonStop.setAttribute("disabled", "");
    $ex06ButtonReset.removeAttribute("disabled");
}

function IncrementeCompteur() {
    $ex06TextCompteur.value = parseInt($ex06TextCompteur.value) + 1;
}

function resetCompteur() {
    $ex06TextCompteur.value = 0;
    $ex06ButtonStart.removeAttribute("disabled");
    $ex06ButtonStop.setAttribute("disabled", "");
    $ex06ButtonReset.setAttribute("disabled", "");
}

//-------------------------------------</code></pre>

                        <div class = "ui segment">
                            <!-- js2019_06_timers -->
                            <input type = "button"
                                   value = "Start"
                                   id = "ex06BtnStart">

                            <input type = "button"
                                   value = "Stop"
                                   id = "ex06BtnStop">

                            <input type = "button"
                                   value = "Reset"
                                   id = "ex06BtnReset">

                            <label for = "ex06Display">

                                <input type = "text"
                                       value = "Display"
                                       id = "ex06DisplayTextCompteur"
                                       readonly> </label>
                        </div>

                        <script>// js2019_06_timers.js
                            "use strict";

                            //----------------------------------------------------------------------------------------
                            // init variables…
                            //----------------------------------------------------------------------------------------
                            /*
							let $ex06ButtonStart = function.getElementById("ex06BtnStart").addEventListener("click");
							let $ex06ButtonStop = function.getElementById("ex06BtnStop").addEventListener("click");
							let $ex06ButtonReset = function.getElementById("ex06BtnReset").addEventListener("click");
							*/

                            let $ex06ButtonStart = document.getElementById("ex06BtnStart");
                            let $ex06ButtonStop = document.getElementById("ex06BtnStop");
                            let $ex06ButtonReset = document.getElementById("ex06BtnReset");

                            let $ex06TextCompteur = document.getElementById("ex06DisplayTextCompteur");

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            $ex06ButtonStart.addEventListener("click", startCompteur);
                            $ex06ButtonStop.addEventListener("click", stopCompteur);
                            $ex06ButtonReset.addEventListener("click", resetCompteur);

                            //----------------------------------------------------------------------------------------
                            // Qode appelé auto‑maθi‑que‑mênθ
                            //----------------------------------------------------------------------------------------
                            resetCompteur(); // Reset compteur.

                            // console.log(new Date());

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------

                            // variable globale
                            let $ChronoCompteur = null;

                            function startCompteur() {
                                if ($ChronoCompteur == null) {
                                    $ChronoCompteur = setInterval(IncrementeCompteur, 1000);
                                    $ex06ButtonStart.setAttribute("disabled", "");
                                    $ex06ButtonStop.removeAttribute("disabled");
                                    $ex06ButtonReset.setAttribute("disabled", "");
                                }
                            }

                            function stopCompteur() {
                                clearInterval($ChronoCompteur);
                                $ChronoCompteur = null;
                                $ex06ButtonStart.removeAttribute("disabled");
                                $ex06ButtonStop.setAttribute("disabled", "");
                                $ex06ButtonReset.removeAttribute("disabled");
                            }

                            function IncrementeCompteur() {
                                $ex06TextCompteur.value = parseInt($ex06TextCompteur.value) + 1;
                            }

                            function resetCompteur() {
                                $ex06TextCompteur.value = 0;
                                $ex06ButtonStart.removeAttribute("disabled");
                                $ex06ButtonStop.setAttribute("disabled", "");
                                $ex06ButtonReset.setAttribute("disabled", "");
                            }

                            //-------------------------------------
                        </script>
                    </div>

                    <div class = "ui segment">
                        <h3 id = "titleH3DevoirAfficherLHeureDeLOrdinateur">
                            <a href = "?#title-h2-table-of-contents">Ex2019_07 :</a>
                        </h3>

	                    <p>Devoir afficher l'heure de l'ordinateur et les milliseconde.</p>

	                    <pre><code class="language-html line-numbers">&lt;p&gt;Il est &lt;span id = "spanAfficherHeure"&gt;&lt;/span&gt;…&lt;br&gt;&lt;/p&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">/* js2019_07.html */
setInterval(miseAJourHeure, 100);
// Interval 100 milli‑seconde.

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
function miseAJourHeure() {

    //------------------------------------------------------------------------------------
    // init variables…
    //------------------------------------------------------------------------------------

	let $varMaintenant = new Date();
	let $varHeures = $varMaintenant.getHours();
	let $varMinutes = $varMaintenant.getMinutes();
	let $varSecondes = $varMaintenant.getSeconds();
	let $varDixiemes = Math.floor($varMaintenant.getMilliseconds() / 100);

	// Math $var = 9,8888…
	// Math.round($var); // arrondie. 10 ⤮
	// Math.floor($var); // tronque.   9 ⇘ [fluʀ]
	// Math.ceil($var);  // tronque.  10 ⇗

	// ToFixed
	// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toFixed

	/*
	if (varMinutes &lt; 10) {
		varMinutes = "0" + varMinutes;
	}
	 */

	let $varHeureMinuteSecondeMilliseconde;

	$varHeureMinuteSecondeMilliseconde =
		($varHeures &lt; 10 ? "0" + $varHeures : $varHeures) + "h"
		+
		($varMinutes &lt; 10 ? "0" + $varMinutes : $varMinutes) + "m"
		+
		($varSecondes &lt; 10 ? "0" + $varSecondes : $varSecondes) + 's'
		+
		($varDixiemes) + 'd';

	document.getElementById("spanAfficherHeure").innerHTML = $varHeureMinuteSecondeMilliseconde;
}</code></pre>

                        <div class = "ui segment info message">
                            <p>Il est <span id = "spanAfficherHeure"></span>…<br></p>
                        </div>
                        <p>```javascript´´´</p>

                        <script>/* js2019_07.js */
                            setInterval(miseAJourHeure, 100);
                            // Interval 100 milli‑seconde.

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------
                            function miseAJourHeure() {

                                //------------------------------------------------------------------------------------
                                // init variables…
                                //------------------------------------------------------------------------------------

                                let $varMaintenant = new Date();
                                let $varHeures = $varMaintenant.getHours();
                                let $varMinutes = $varMaintenant.getMinutes();
                                let $varSecondes = $varMaintenant.getSeconds();
                                let $varDixiemes = Math.floor($varMaintenant.getMilliseconds() / 100);

                                // Math $var = 9,8888…
                                // Math.round($var); // arrondie. 10 ⤮
                                // Math.floor($var); // tronque.   9 ⇘ [fluʀ]
                                // Math.ceil($var);  // tronque.  10 ⇗

                                // ToFixed
                                // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/toFixed

                                /*
								if (varMinutes < 10) {
									varMinutes = "0" + varMinutes;
								}
								 */

                                let $varHeureMinuteSecondeMilliseconde;

                                $varHeureMinuteSecondeMilliseconde =
                                    ($varHeures < 10 ? "0" + $varHeures : $varHeures) + "h"
                                    +
                                    ($varMinutes < 10 ? "0" + $varMinutes : $varMinutes) + "m"
                                    +
                                    ($varSecondes < 10 ? "0" + $varSecondes : $varSecondes) + 's'
                                    +
                                    ($varDixiemes) + 'd';

                                document.getElementById("spanAfficherHeure").innerHTML = $varHeureMinuteSecondeMilliseconde;
                            }
                        </script>
                    </div>

                    <div class = "ui segment info message">2019‑10‑01 ‒ Mardi :</div>

                    <div class = "ui segment info message">
                        <p><strong>Classe :</strong> model<br> <strong>Objet :</strong> instanciation.</p>
                    </div>

                    <div class = "ui segment">

                        <h3 id = titleH3Ex2019_08_calculus>
                            <a href = "?#title-h2-table-of-contents">Ex2019_08_calculus</a></h3>

	                    <div class="ui segment info message">
		                    <p>Répondre à un calcul aléatoire avec opérateur d'addition.</p>
	                    </div>

	                    <p>Système qui génère un nombre aléatoire,<br> dans deux input qui s'additionne et donne un résultat.<br> À chaque fois que l'on fait un calcul et clique le bouton, il rajoute des lignes.<br> Liste de commande.
	                    </p>

	                    <h5 id = "titleH5"><a href = "?#title-h2-table-of-contents">Math.random();<a></h5>

	                    <ul>
		                    <li>
			                    <a href = "https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Math/random">developer.mozilla.org/Objets_globaux/Math/random</a>
		                    </li>
	                    </ul>

                        <p>Voir photo pro prendre note.</p>

                        <img src = "assets/img/qours/2019-10-01_‏‎11h31m06s_‎IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/‎2019-10-01_‏‎11h42m00s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎13h14m24s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎13h17m18s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎14h15m39s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎14h20m07s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎14h41m21s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎14h41m26s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎15h04m07s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <img src = "assets/img/qours/2019-10-01_‏‎15h09m09s_IMG.jpg"
                             style = "width: 99%;"
                             alt = "">

                        <pre><code class = "language-css line-numbers">/* ex2019_08_calculs.css */
.repOK {
	background-color: green;
	color: white;
}

.repPasOK {
	background-color: red;
	color: white;
}
</code></pre>

                        <pre><code class = "language-html line-numbers">&lt;!-- ex2019_08_calculs.html --&gt;
&lt;div id = "ex08DivLigneCalcul"&gt;

    &lt;input type = "text"
           id = "ex08TexteNombre01"
           size = "5"
           title = "Nombre un."
           disabled/&gt;
    +
    &lt;input type = "text"
           id = "ex08TexteNombre02"
           size = "5"
           title = "Nombre deux."
           disabled/&gt;
    =
    &lt;input type = "text"
           id = "ex08texteReponse"
           title = "Réponse."
           size = "5"/&gt;

    &lt;input type = "button"
           id = "ex08BoutonNouveauCalcul"
           value = "Nouveau calcul"/&gt;

    &lt;input type = "button"
           id = "ex08BoutonVerification"
           value = "Vérifier"
           disabled/&gt;
&lt;/div&gt;

&lt;div id = "ex08DivResultats"&gt;
    &lt;b&gt;Bonnes réponses :&lt;/b&gt; &lt;span id = "ex08SpanNombreReponseOK"&gt;0&lt;/span&gt;&lt;br/&gt;
    &lt;b&gt;Mauvaises réponses :&lt;/b&gt; &lt;span id = "ex08SpanNombreReponsePasOK"&gt;0&lt;/span&gt;&lt;br/&gt;
&lt;/div&gt;</code></pre>

                        <pre><code class = "language-javascript line-numbers">// ex2019_08_calculs.js

//----------------------------------------------------------------------------------------
// init variables…
//----------------------------------------------------------------------------------------
let $ex08BoutonNouveauCalcul = document.getElementById("ex08BoutonNouveauCalcul");
let $ex08BoutonVerification = document.getElementById("ex08BoutonVerification");

let $ex08TexteNombre01 = document.getElementById("ex08TexteNombre01");
let $ex02TexteNombre02 = document.getElementById("ex08TexteNombre02");
let $ex08TexteReponse = document.getElementById("ex08texteReponse");

let $ex08SpanNombreReponseOK = document.getElementById("ex08SpanNombreReponseOK");
let $ex08SpanNombreReponsPasOK = document.getElementById("ex08SpanNombreReponsePasOK");

let $ex08NombreReponseOK = 0;
let $ex08NombreReponsePasOK = 0;

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
$ex08BoutonVerification.addEventListener("click", ex08VerificationCalcul);
$ex08BoutonNouveauCalcul.addEventListener("click", nouveauCalcul);

$ex08BoutonVerification.setAttribute("disabled", "");

ex08AfficheResultats();

//----------------------------------------------------------------------------------------
// outils
//----------------------------------------------------------------------------------------
function nouveauCalcul() {
    $ex08BoutonNouveauCalcul.setAttribute("disabled", "");

    let $NombreAleatoire = ex08CalculAleatoire();

    $ex08TexteNombre01.value = $NombreAleatoire.nb1;
    $ex02TexteNombre02.value = $NombreAleatoire.nb2;
    $ex08TexteReponse.value = "";

    $ex08TexteReponse.removeAttribute("disabled");
    $ex08TexteReponse.classList = "";
    $ex08TexteReponse.focus();

    $ex08BoutonVerification.removeAttribute("disabled");
}

//----------------------------------------------------------------------------------------
function ex08VerificationCalcul() {
    $ex08BoutonVerification.setAttribute("disabled", "");
    $ex08TexteReponse.setAttribute("disabled", "");

    let $reponse = Number($ex08TexteNombre01.value) + Number($ex02TexteNombre02.value);

    if (Number($ex08TexteReponse.value) === $reponse) {
        $ex08TexteReponse.className = "repOK";
        $ex08NombreReponseOK++;
    } else {
        $ex08TexteReponse.className = "repPasOK";
        $ex08NombreReponsePasOK++;
    }

    ex08AfficheResultats();
    $ex08BoutonNouveauCalcul.removeAttribute("disabled");
}

//----------------------------------------------------------------------------------------
function ex08AfficheResultats() {
    $ex08SpanNombreReponseOK.innerHTML = $ex08NombreReponseOK;
    $ex08SpanNombreReponsPasOK.innerHTML = $ex08NombreReponsePasOK;
}

//=========================================================================
function ex08NombreAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//----------------------------------------------------------------------------------------
function ex08CalculAleatoire() {
    //let calcul = new Object();
    let $calcul = {};

    $calcul.nb1 = ex08NombreAleatoire(1, 20);
    $calcul.nb2 = ex08NombreAleatoire(1, 20);

    return $calcul;

} //function calculAlea(){
//=========================================================================</code></pre>

	                    <div class = "ui segment">

		                    <!-- ex2019_08_calculs.html -->
		                    <div id = "ex08DivLigneCalcul">

			                    <input type = "text"
			                           id = "ex08TexteNombre01"
			                           size = "5"
			                           title = "Nombre un."
			                           disabled/>
			                    +
			                    <input type = "text"
			                           id = "ex08TexteNombre02"
			                           size = "5"
			                           title = "Nombre deux."
			                           disabled/>
			                    =
			                    <input type = "text"
			                           id = "ex08texteReponse"
			                           title = "Réponse."
			                           size = "5"/>

			                    <input type = "button"
			                           id = "ex08BoutonNouveauCalcul"
			                           value = "Nouveau calcul"/>

			                    <input type = "button"
			                           id = "ex08BoutonVerification"
			                           value = "Vérifier"
			                           disabled/>
		                    </div>

		                    <div id = "ex08DivResultats">
			                    <b>Bonnes réponses :</b> <span id = "ex08SpanNombreReponseOK">0</span><br/>
			                    <b>Mauvaises réponses :</b> <span id = "ex08SpanNombreReponsePasOK">0</span><br/>
		                    </div>
	                    </div>

	                    <script>// ex2019_08_calculs.js

                            //----------------------------------------------------------------------------------------
                            // init variables…
                            //----------------------------------------------------------------------------------------
                            let $ex08BoutonNouveauCalcul = document.getElementById("ex08BoutonNouveauCalcul");
                            let $ex08BoutonVerification = document.getElementById("ex08BoutonVerification");

                            let $ex08TexteNombre01 = document.getElementById("ex08TexteNombre01");
                            let $ex02TexteNombre02 = document.getElementById("ex08TexteNombre02");
                            let $ex08TexteReponse = document.getElementById("ex08texteReponse");

                            let $ex08SpanNombreReponseOK = document.getElementById("ex08SpanNombreReponseOK");
                            let $ex08SpanNombreReponsPasOK = document.getElementById("ex08SpanNombreReponsePasOK");

                            let $ex08NombreReponseOK = 0;
                            let $ex08NombreReponsePasOK = 0;

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            $ex08BoutonVerification.addEventListener("click", ex08VerificationCalcul);
                            $ex08BoutonNouveauCalcul.addEventListener("click", nouveauCalcul);

                            $ex08BoutonVerification.setAttribute("disabled", "");

                            ex08AfficheResultats();

                            //----------------------------------------------------------------------------------------
                            // outils
                            //----------------------------------------------------------------------------------------
                            function nouveauCalcul() {
                                $ex08BoutonNouveauCalcul.setAttribute("disabled", "");

                                let $NombreAleatoire = ex08CalculAleatoire();

                                $ex08TexteNombre01.value = $NombreAleatoire.nb1;
                                $ex02TexteNombre02.value = $NombreAleatoire.nb2;
                                $ex08TexteReponse.value = "";

                                $ex08TexteReponse.removeAttribute("disabled");
                                $ex08TexteReponse.classList = "";
                                $ex08TexteReponse.focus();

                                $ex08BoutonVerification.removeAttribute("disabled");
                            }

                            //----------------------------------------------------------------------------------------
                            function ex08VerificationCalcul() {
                                $ex08BoutonVerification.setAttribute("disabled", "");
                                $ex08TexteReponse.setAttribute("disabled", "");

                                let $reponse = Number($ex08TexteNombre01.value) + Number($ex02TexteNombre02.value);

                                if (Number($ex08TexteReponse.value) === $reponse) {
                                    $ex08TexteReponse.className = "repOK";
                                    $ex08NombreReponseOK++;
                                } else {
                                    $ex08TexteReponse.className = "repPasOK";
                                    $ex08NombreReponsePasOK++;
                                }

                                ex08AfficheResultats();
                                $ex08BoutonNouveauCalcul.removeAttribute("disabled");
                            }

                            //----------------------------------------------------------------------------------------
                            function ex08AfficheResultats() {
                                $ex08SpanNombreReponseOK.innerHTML = $ex08NombreReponseOK;
                                $ex08SpanNombreReponsPasOK.innerHTML = $ex08NombreReponsePasOK;
                            }

                            //=========================================================================
                            function ex08NombreAleatoire(min, max) {
                                return Math.floor(Math.random() * (max - min + 1)) + min;
                            }

                            //----------------------------------------------------------------------------------------
                            function ex08CalculAleatoire() {
                                //let calcul = new Object();
                                let $calcul = {};

                                $calcul.nb1 = ex08NombreAleatoire(1, 20);
                                $calcul.nb2 = ex08NombreAleatoire(1, 20);

                                return $calcul;

                            } //function calculAlea(){
                            //=========================================================================</script>

	                    </div>

                    <div class = "ui segment">
                        <h3 id="titleH3Ex2019_09_calculs"><a href="?#title-h2-table-of-contents">Ex2019_09_calculs</a> :</h3>

	                    <div class="ui segment info message">
		                    <p>Répondre à un calcul aléatoire avec opérateur mutagène</p>
	                    </div>

                        <pre><code class = "language-css line-numbers">/* ex2019_09_calculs.css */
.repOK {
    background-color: green;
    color: white;
}

.repPasOK {
    background-color: red;
    color: white;
}

.ex10Operateur,
.ex09-span-options {
    width: 1em;
    text-align: center;
    display: inline-block;
}
</code></pre>

	                    <pre><code class="language-html line-numbers">&lt;!-- ex2019_09_calculs.html --&gt;
&lt;div id="divLg$calcul"&gt;

    &lt;input type="text" id="ex09TextNombre01" size="5" disabled /&gt; &lt;!-- readonly --&gt;

    &lt;span id="ex09SpanOptions" class="ex09-span-options"&gt;?&lt;/span&gt;

    &lt;input type="text" id="ex09TextNombre02" size="5" disabled /&gt; &lt;!-- readonly --&gt;

    =

    &lt;input type="text" id="ex09texteReponse" size="5" /&gt;

    &lt;input type="button" id="ex09BoutonNouveau$calcul" value="Nouveau calcul" /&gt;

    &lt;input type="button" id="ex09BoutonVerification" value="Vérifier" disabled /&gt;

&lt;/div&gt;</code></pre>
	                    
                        <pre><code class = "language-javascript line-numbers">/* ex2019_09_calculs.js */
//=========================================================================

//----------------------------------------------------------------------------------------
// init variables…
//----------------------------------------------------------------------------------------
let $ex09BoutonNouveau$calcul = document.getElementById("ex09BoutonNouveau$calcul");
let $ex09BoutonVerification = document.getElementById("ex09BoutonVerification");

let $ex09TextNombre01 = document.getElementById("ex09TextNombre01");
let $ex09SpanOptions = document.getElementById("ex09SpanOptions");
let $ex09TextNombre02 = document.getElementById("ex09TextNombre02");
let $ex09texteReponse = document.getElementById("ex09texteReponse");

let $ex09SpanNombreReponseOK = document.getElementById("ex09SpanNombreReponseOK");
// il faut côm‑puθa‑bi‑liser les bonne réponse.
let $ex09SpanNombreReponsePasOK = document.getElementById("ex09SpanNombreReponsePasOK");

let ex09NombreReponseOK = 0;
let ex09NombreReponsePasOK = 0;

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
$ex09BoutonVerification.addEventListener("click", verificationCalcul);
$ex09BoutonNouveau$calcul.addEventListener("click", nouveauCalcul);

$ex09BoutonVerification.setAttribute("disabled", "");
// Déactive une fois après avori appuyé sur le bouton vérification.

afficheResultats();

//----------------------------------------------------------------------------------------
// Outils
//----------------------------------------------------------------------------------------
function nouveauCalcul() {
    $ex09BoutonNouveau$calcul.setAttribute("disabled", "");

    let $nombreAleatoire = $calculAleatoire();

    $ex09TextNombre01.value = $nombreAleatoire.nb1;
    $ex09SpanOptions.innerHTML = $nombreAleatoire.op;
    $ex09TextNombre02.value = $nombreAleatoire.nb2;
    $ex09texteReponse.value = "";
    $ex09texteReponse.setAttribute("rep", $nombreAleatoire.rep);

    $ex09texteReponse.removeAttribute("readonly");
    $ex09texteReponse.classList = "";
    $ex09texteReponse.focus();

    $ex09BoutonVerification.removeAttribute("disabled");
}

//----------------------------------------------------------------------------------------
function verificationCalcul() {
    $ex09BoutonVerification.setAttribute("disabled", "");
    $ex09texteReponse.setAttribute("readonly", "");

    if (Number($ex09texteReponse.value) === Number($ex09texteReponse.getAttribute("rep"))) {
        $ex09texteReponse.className = "repOK";
        ex09NombreReponseOK++;
    } else {
        $ex09texteReponse.className = "repPasOK";
        ex09NombreReponsePasOK++;
    }

    afficheResultats();
    $ex09BoutonNouveau$calcul.removeAttribute("disabled");
}

//----------------------------------------------------------------------------------------
function afficheResultats() {
    $ex09SpanNombreReponseOK.innerHTML = ex09NombreReponseOK;
    $ex09SpanNombreReponsePasOK.innerHTML = ex09NombreReponsePasOK;
}

//=========================================================================
function nombreAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//----------------------------------------------------------------------------------------
function $calculAleatoire() {
    //let $calcul = new Object();
    let $calcul = {};

    let $op = nombreAleatoire(1, 4);

    switch ($op) {
        case 1:
            $calcul.op = "+";
            $calcul.nb1 = nombreAleatoire(1, 20);
            $calcul.nb2 = nombreAleatoire(1, 20);
            $calcul.rep = $calcul.nb1 + $calcul.nb2;
            break;
        case 2:
            $calcul.op = "-";
            $calcul.nb1 = nombreAleatoire(1, 20);
            $calcul.nb2 = nombreAleatoire(1, 20);
            if ($calcul.nb1 &lt; $calcul.nb2) {
                [$calcul.nb1, $calcul.nb2] = [$calcul.nb2, $calcul.nb1];
            }
            $calcul.rep = $calcul.nb1 - $calcul.nb2;
            break;
        case 3:
            $calcul.op = "×";
            $calcul.nb1 = nombreAleatoire(2, 10);
            $calcul.nb2 = nombreAleatoire(2, 10);
            $calcul.rep = $calcul.nb1 * $calcul.nb2;
            break;
        case 4:
            $calcul.op = "÷";
            $calcul.nb1 = nombreAleatoire(2, 10);
            $calcul.nb2 = nombreAleatoire(2, 10);
            $calcul.rep = $calcul.nb1 * $calcul.nb2;
            [$calcul.nb1, $calcul.rep] = [$calcul.rep, $calcul.nb1];
            break;
    }

    return $calcul;
} //function $calculAleatoire(){
//=========================================================================</code></pre>

	                    <div class="ui segment">

		                    <!-- ex2019_09_calculs.html -->
		                    <div id="divLg$calcul">

			                    <input type="text" id="ex09TextNombre01" size="5" disabled /> <!-- readonly -->

			                    <span id="ex09SpanOptions" class="ex09-span-options">?</span>

			                    <input type="text" id="ex09TextNombre02" size="5" disabled /> <!-- readonly -->
			                    =
			                    <input type="text" id="ex09texteReponse" size="5" />

			                    <input type="button" id="ex09BoutonNouveau$calcul" value="Nouveau calcul" />

			                    <input type="button" id="ex09BoutonVerification" value="Vérifier" disabled />

		                    </div>

		                    <div id="divResultats">

			                    <b>Bonnes réponses :</b> <span id="ex09SpanNombreReponseOK">0</span><br />
			                    <b>Mauvaises réponses :</b> <span id="ex09SpanNombreReponsePasOK">0</span><br />

		                    </div>

	                    </div>

	                    <!--
						<script type="text/javascript" src="ex2019_09_$calculs.js"></script>
						-->

                        <script>/* ex2019_09_calculs.js */
                            //=========================================================================

                            //----------------------------------------------------------------------------------------
                            // init variables…
                            //----------------------------------------------------------------------------------------
                            let $ex09BoutonNouveau$calcul = document.getElementById("ex09BoutonNouveau$calcul");
                            let $ex09BoutonVerification = document.getElementById("ex09BoutonVerification");

                            let $ex09TextNombre01 = document.getElementById("ex09TextNombre01");
                            let $ex09SpanOptions = document.getElementById("ex09SpanOptions");
                            let $ex09TextNombre02 = document.getElementById("ex09TextNombre02");
                            let $ex09texteReponse = document.getElementById("ex09texteReponse");

                            let $ex09SpanNombreReponseOK = document.getElementById("ex09SpanNombreReponseOK");
                            // il faut côm‑puθa‑bi‑liser les bonne réponse.
                            let $ex09SpanNombreReponsePasOK = document.getElementById("ex09SpanNombreReponsePasOK");

                            let ex09NombreReponseOK = 0;
                            let ex09NombreReponsePasOK = 0;

                            //----------------------------------------------------------------------------------------
                            // init évènements…
                            //----------------------------------------------------------------------------------------
                            $ex09BoutonVerification.addEventListener("click", verificationCalcul);
                            $ex09BoutonNouveau$calcul.addEventListener("click", nouveauCalcul);

                            $ex09BoutonVerification.setAttribute("disabled", "");
                            // Déactive une fois après avori appuyé sur le bouton vérification.

                            afficheResultats();

                            //----------------------------------------------------------------------------------------
                            // Outils
                            //----------------------------------------------------------------------------------------
                            function nouveauCalcul() {
                                $ex09BoutonNouveau$calcul.setAttribute("disabled", "");

                                let $nombreAleatoire = $calculAleatoire();

                                $ex09TextNombre01.value = $nombreAleatoire.nb1;
                                $ex09SpanOptions.innerHTML = $nombreAleatoire.op;
                                $ex09TextNombre02.value = $nombreAleatoire.nb2;
                                $ex09texteReponse.value = "";
                                $ex09texteReponse.setAttribute("rep", $nombreAleatoire.rep);

                                $ex09texteReponse.removeAttribute("readonly");
                                $ex09texteReponse.classList = "";
                                $ex09texteReponse.focus();

                                $ex09BoutonVerification.removeAttribute("disabled");
                            }

                            //----------------------------------------------------------------------------------------
                            function verificationCalcul() {
                                $ex09BoutonVerification.setAttribute("disabled", "");
                                $ex09texteReponse.setAttribute("readonly", "");

                                if (Number($ex09texteReponse.value) === Number($ex09texteReponse.getAttribute("rep"))) {
                                    $ex09texteReponse.className = "repOK";
                                    ex09NombreReponseOK++;
                                } else {
                                    $ex09texteReponse.className = "repPasOK";
                                    ex09NombreReponsePasOK++;
                                }

                                afficheResultats();
                                $ex09BoutonNouveau$calcul.removeAttribute("disabled");
                            }

                            //----------------------------------------------------------------------------------------
                            function afficheResultats() {
                                $ex09SpanNombreReponseOK.innerHTML = ex09NombreReponseOK;
                                $ex09SpanNombreReponsePasOK.innerHTML = ex09NombreReponsePasOK;
                            }

                            //=========================================================================
                            function nombreAleatoire(min, max) {
                                return Math.floor(Math.random() * (max - min + 1)) + min;
                            }

                            //----------------------------------------------------------------------------------------
                            function $calculAleatoire() {
                                //let $calcul = new Object();
                                let $calcul = {};

                                let $op = nombreAleatoire(1, 4);

                                switch ($op) {
                                    case 1:
                                        $calcul.op = "+";
                                        $calcul.nb1 = nombreAleatoire(1, 20);
                                        $calcul.nb2 = nombreAleatoire(1, 20);
                                        $calcul.rep = $calcul.nb1 + $calcul.nb2;
                                        break;
                                    case 2:
                                        $calcul.op = "-";
                                        $calcul.nb1 = nombreAleatoire(1, 20);
                                        $calcul.nb2 = nombreAleatoire(1, 20);
                                        if ($calcul.nb1 < $calcul.nb2) {
                                            [$calcul.nb1, $calcul.nb2] = [$calcul.nb2, $calcul.nb1];
                                        }
                                        $calcul.rep = $calcul.nb1 - $calcul.nb2;
                                        break;
                                    case 3:
                                        $calcul.op = "×";
                                        $calcul.nb1 = nombreAleatoire(2, 10);
                                        $calcul.nb2 = nombreAleatoire(2, 10);
                                        $calcul.rep = $calcul.nb1 * $calcul.nb2;
                                        break;
                                    case 4:
                                        $calcul.op = "÷";
                                        $calcul.nb1 = nombreAleatoire(2, 10);
                                        $calcul.nb2 = nombreAleatoire(2, 10);
                                        $calcul.rep = $calcul.nb1 * $calcul.nb2;
                                        [$calcul.nb1, $calcul.rep] = [$calcul.rep, $calcul.nb1];
                                        break;
                                }

                                return $calcul;
                            } //function $calculAleatoire(){
                            //=========================================================================</script>
                    </div>

	                <div class="ui segment ui">
                        <pre><code class = "language-javascript line-numbers">let harry = {nom: "potter", age: 16};

console.log(harry.nom);

harry.sexe = "m"; // maintenant l'objet contient sexe.</code></pre>

                        // textRep = Reponse.

                        <pre><code class = "language-javascript line-numbers">nb1 = 5;
nb2 = 10; // intervertir ?

tmp = nb1;
nb1 = nb2;
nb2 = tmp;

// mais y a ça dés‑or‑mais

[nb1, nb2] = [nb2, nb1];</code></pre>
	                </div>

<div class="ui segment">

	<h3 id="titleH3Ex2019_10_calculs"><a href = "?#title-h2-table-of-contents">ex2019_10_calculs :</a></h3>

                    <div class="ui segment info message">2019‑10‑08 ‒ 09H31 :</div>

	<div class="ui info message">
		<p>Devoir "Exercice 10" tenté de créé une ligne cloné avec l'exercice 9, avec le node.</p>
	</div>

	<pre><code class="language-css line-numbers">/* ex2019_10_calculs.css */
.repOK {
    background-color: green;
    color: white;
}

.repPasOK {
    background-color: red;
    color: white;
}

.ex10Operateur,
.ex09-span-options {
    width: 1em;
    text-align: center;
    display: inline-block;
}</code></pre>

	<pre><code class="language-html line-numbers">&lt;div class = "ex10LigneCalcul"&gt;

&lt;input type = "text"
       class = "ex10ClasseNombre01"
       size = "5"
       title = "Nombre un."
       disabled /&gt; &lt;!-- readonly --&gt;

&lt;span class = "ex10Operateur"&gt;?&lt;/span&gt;

&lt;input type = "text"
       class = "ex10ClasseNombre02"
       size = "5"
       title = "Nombre deux."
       disabled /&gt; &lt;!-- readonly --&gt;

=

&lt;input type = "text"
       class = "ex10ClasseReponse"
       size = "5"
       title = "Réponse."/&gt;

&lt;input type = "button"
       id = "ex10BoutonVerification"
       value = "vérifier"/&gt;
&lt;/div&gt;</code></pre>

	<pre><code class="language-javascript line-numbers">"use strict";
//=========================================================================

//----------------------------------------------------------------------------------------
// init variables…
//----------------------------------------------------------------------------------------
// alias
let $ex10DivCalculs = document.getElementById("ex10DivCalculs");
let $ex10BoutonVerification = document.getElementById("ex10BoutonVerification");
//---------------------------------------------------------

// associer la fonction nouvelleLigneCalcul au bouton verif
$ex10BoutonVerification.addEventListener("click", nouvelleLigneCalcul);

//---------------------------------------------------------

let $ex10LigneCalcul = document.getElementsByClassName("ex10LigneCalcul")[0];

// enlever le bouton de la ligne à dupliquer
$ex10LigneCalcul.removeChild($ex10BoutonVerification);


// stocker la ligne à dupliquer
let $modifierLigneCalcul = $ex10LigneCalcul.cloneNode(true);

// supprimer la ligne qui a servi de modèle
//$ex10LigneCalcul.remove();

$ex10DivCalculs.innerHTML = "";
$ex10LigneCalcul = null;

//---------------------------------------------------------
nouvelleLigneCalcul();

//---------------------------------------------------------

function nouvelleLigneCalcul() {
    let $nouvelleLigneCalcul = $modifierLigneCalcul.cloneNode(true);

    let $objetResultatCalculAleatoire = calculAleatoire();

    $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseNombre01")[0].value = $objetResultatCalculAleatoire.nombre01;
    $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseNombre02")[0].value = $objetResultatCalculAleatoire.nombre02;
    $nouvelleLigneCalcul.getElementsByClassName("ex10Operateur")[0].innerHTML = $objetResultatCalculAleatoire.operateur;
    $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].setAttribute("ex10ClasseReponse", $objetResultatCalculAleatoire.classeReponse);
    // $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].focus();

    $nouvelleLigneCalcul.appendChild($ex10BoutonVerification);

    if ($ex10DivCalculs.childNodes.length &gt; 0) clotureLigneCalcul();

    $ex10DivCalculs.appendChild($nouvelleLigneCalcul);

    $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].focus();
}

function clotureLigneCalcul() {
    let $derniereLigneCalcul = $ex10DivCalculs.lastChild;
    let $ex10ClasseReponse = $derniereLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0];

    $ex10ClasseReponse.setAttribute("disabled", ""); // "readonly" changed by disabled.

    // TODO verif chaines vides
    if (Number($ex10ClasseReponse.value) === Number($ex10ClasseReponse.getAttribute("ex10ClasseReponse"))) {
        $ex10ClasseReponse.classList.add("repOK");
    } else {
        $ex10ClasseReponse.classList.add("repPasOK");
    }
}

//=========================================================================
function nombreAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//---------------------------------------------------------
function calculAleatoire() {
    // let $calcul = new Object();
    let $calcul = {};

    let $op = nombreAleatoire(1, 4);

    switch ($op) {
        case 1:
            $calcul.operateur = "+";
            $calcul.nombre01 = nombreAleatoire(1, 20);
            $calcul.nombre02 = nombreAleatoire(1, 20);
            $calcul.classeReponse = $calcul.nombre01 + $calcul.nombre02;
            break;
        case 2:
            $calcul.operateur = "-";
            $calcul.nombre01 = nombreAleatoire(1, 20);
            $calcul.nombre02 = nombreAleatoire(1, 20);
            if ($calcul.nombre01 &lt; $calcul.nombre02) {
                [$calcul.nombre01, $calcul.nombre02] = [$calcul.nombre02, $calcul.nombre01];
            }
            $calcul.classeReponse = $calcul.nombre01 - $calcul.nombre02;
            break;
        case 3:
            $calcul.operateur = "×";
            $calcul.nombre01 = nombreAleatoire(2, 10);
            $calcul.nombre02 = nombreAleatoire(2, 10);
            $calcul.classeReponse = $calcul.nombre01 * $calcul.nombre02;
            break;
        case 4:
            $calcul.operateur = "÷";
            $calcul.nombre01 = nombreAleatoire(2, 10);
            $calcul.nombre02 = nombreAleatoire(2, 10);
            $calcul.classeReponse = $calcul.nombre01 * $calcul.nombre02;
            [$calcul.nombre01, $calcul.classeReponse] = [$calcul.classeReponse, $calcul.nombre01];
            break;
    }

    return $calcul;
} //function calculAleatoire(){
//=========================================================================</code></pre>

    <div class="ui segment">

        <div id = "ex10DivCalculs">

            <div class = "ex10LigneCalcul">

                <input type = "text"
                       class = "ex10ClasseNombre01"
                       size = "5"
                       title = "Nombre un."
                       disabled /> <!-- readonly -->

                <span class = "ex10Operateur">?</span>

                <input type = "text"
                       class = "ex10ClasseNombre02"
                       size = "5"
                       title = "Nombre deux."
                       disabled /> <!-- readonly -->

                =

                <input type = "text"
                       class = "ex10ClasseReponse"
                       size = "5"
                       title = "Réponse."/>

                <input type = "button"
                       id = "ex10BoutonVerification"
                       value = "vérifier"/>
            </div>

        </div>

    </div>
	<!--
	<script type="text/javascript" src="ex2019_10_calculs.js"></script>
	-->

	<script>"use strict";
        //=========================================================================

        //----------------------------------------------------------------------------------------
        // init variables…
        //----------------------------------------------------------------------------------------

		// alias
        let $ex10DivCalculs = document.getElementById("ex10DivCalculs");

        let $ex10BoutonVerification = document.getElementById("ex10BoutonVerification");

        //----------------------------------------------------------------------------------------
        // init évènements…
        //----------------------------------------------------------------------------------------

        // associer la fonction nouvelleLigneCalcul au bouton verif
        $ex10BoutonVerification.addEventListener("click", nouvelleLigneCalcul);

        //---------------------------------------------------------

        let $ex10LigneCalcul = document.getElementsByClassName("ex10LigneCalcul")[0];

        // enlever le bouton de la ligne à dupliquer
        $ex10LigneCalcul.removeChild($ex10BoutonVerification);

        // stocker la ligne à dupliquer
        let $modifierLigneCalcul = $ex10LigneCalcul.cloneNode(true);

        // supprimer la ligne qui a servi de modèle
        //$ex10LigneCalcul.remove();

        $ex10DivCalculs.innerHTML = "";
        $ex10LigneCalcul = null;

        //----------------------------------------------------------------------------------------
        // Outils
        //----------------------------------------------------------------------------------------
        nouvelleLigneCalcul();

        //---------------------------------------------------------

        function nouvelleLigneCalcul() {
            let $nouvelleLigneCalcul = $modifierLigneCalcul.cloneNode(true);

            let $objetResultatCalculAleatoire = calculAleatoire();

            $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseNombre01")[0].value = $objetResultatCalculAleatoire.nombre01;
            $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseNombre02")[0].value = $objetResultatCalculAleatoire.nombre02;
            $nouvelleLigneCalcul.getElementsByClassName("ex10Operateur")[0].innerHTML = $objetResultatCalculAleatoire.operateur;
            $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].setAttribute("ex10ClasseReponse", $objetResultatCalculAleatoire.classeReponse);
            // $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].focus();

            $nouvelleLigneCalcul.appendChild($ex10BoutonVerification);

            if ($ex10DivCalculs.childNodes.length > 0) clotureLigneCalcul();

            $ex10DivCalculs.appendChild($nouvelleLigneCalcul);

            $nouvelleLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0].focus();
        }

        function clotureLigneCalcul() {
            let $derniereLigneCalcul = $ex10DivCalculs.lastChild;
            let $ex10ClasseReponse = $derniereLigneCalcul.getElementsByClassName("ex10ClasseReponse")[0];

            $ex10ClasseReponse.setAttribute("disabled", ""); // "readonly" changed by disabled.

            // TODO verif chaines vides
            if (Number($ex10ClasseReponse.value) === Number($ex10ClasseReponse.getAttribute("ex10ClasseReponse"))) {
                $ex10ClasseReponse.classList.add("repOK");
            } else {
                $ex10ClasseReponse.classList.add("repPasOK");
            }
        }

        //=========================================================================
        function nombreAleatoire(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        //---------------------------------------------------------
        function calculAleatoire() {
            // let $calcul = new Object();
            let $calcul = {};

            let $op = nombreAleatoire(1, 4);

            switch ($op) {
                case 1:
                    $calcul.operateur = "+";
                    $calcul.nombre01 = nombreAleatoire(1, 20);
                    $calcul.nombre02 = nombreAleatoire(1, 20);
                    $calcul.classeReponse = $calcul.nombre01 + $calcul.nombre02;
                    break;
                case 2:
                    $calcul.operateur = "-";
                    $calcul.nombre01 = nombreAleatoire(1, 20);
                    $calcul.nombre02 = nombreAleatoire(1, 20);
                    if ($calcul.nombre01 < $calcul.nombre02) {
                        [$calcul.nombre01, $calcul.nombre02] = [$calcul.nombre02, $calcul.nombre01];
                    }
                    $calcul.classeReponse = $calcul.nombre01 - $calcul.nombre02;
                    break;
                case 3:
                    $calcul.operateur = "×";
                    $calcul.nombre01 = nombreAleatoire(2, 10);
                    $calcul.nombre02 = nombreAleatoire(2, 10);
                    $calcul.classeReponse = $calcul.nombre01 * $calcul.nombre02;
                    break;
                case 4:
                    $calcul.operateur = "÷";
                    $calcul.nombre01 = nombreAleatoire(2, 10);
                    $calcul.nombre02 = nombreAleatoire(2, 10);
                    $calcul.classeReponse = $calcul.nombre01 * $calcul.nombre02;
                    [$calcul.nombre01, $calcul.classeReponse] = [$calcul.classeReponse, $calcul.nombre01];
                    break;
            }

            return $calcul;
        } //function calculAleatoire(){
        //=========================================================================</script>
</div>

                    <div class="ui segment">
                    <pre><code class = "language-javascript line-numbers">$(".rouge")                            // ⤴ 60× plus rapide.
document.getEementByClassName("Rouge") // Celui ci est plus precis.
document.querySelectorAll(".rouge")    // ⤸ 20 à 30 × plus rapide.
						</code></pre>

                    <pre><code class = "language-javascript line-numbers">// Voir js09 - modification du DOM.js, ligne 13 @ 21
&lt;div id="divMaison">
	&lt;div>Ceci est le hall.&lt;/div>    // ligne 32 .insertBefore()
	&lt;div>Ceci est le salon.&lt;/div>   // ligne 16 .appendChild()
	&lt;div>Ceci est la cuisine.&lt;/div> // ligne 20 .appendChild()
&lt;/div></code></pre>

                    <pre><code class = "language-javascript line-numbers">$salon
↳ &lt;div>Ceci est le salon&lt;/div></code></pre>

                    <pre><code class = "language-javascript line-numbers">// Ligne 84
element = balise.
node = .</code></pre>
                </fieldset>
            </section>
        </section>
        <!-- END PRINCIPAL CONTENT -->

        <section>
            <fieldset>
                <legend><h4 id = "2019-10-08-13H21-Introduction">2019‑10‑08 ‒ 13H21 : Introduction à A.J.A.X.</h4>
                </legend>

                <ul>
                    <li>requête syn‑chrone on ne peut rien faire le temps de la requête.</li>
                    <li>requête a‑syn‑chrone on peut faire de autre chose pendant la requête.</li>
                </ul>

                <pre><code class = "language-javascript line-numbers">let $req = new XMLHttpRequest();
// Mozilla, Safari, … Ligne 10 TestAjax01.html

let $req = new ActiveXObject();
// Internet Explorer, ligne ?

req.open("GET", "fichier.php?nom=Toto",true); // True = ë‑synë‑qʰronë, False = synë‑qʰronë.

req.propriété = appel fonction.
req.onreadystatechange = resultatsRequete;

req.méthode("propriété", function)
req.addEventListener("readystatechange", afficherResultats);

req.readyState → 1, 2 commencé, 3 reception de block , (4) Tout est ok.
req.status → (200) tout va bien, 404 erreur,…
┌ req.responseText
│ req.responseXML
└ JSON.parse(req.responseTEXT)</code></pre>

                <pre><code class = "language-javascript line-numbers">Property 	Description
.onreadystatechange
// Defines a function to be called when the readyState property changes

.readyState
// Holds the status of the XMLHttpRequest.
// 0: request not initialized
// 1: server connection established
// 2: request received
// 3: processing request
// 4: request finished and response is ready

.status
// 200: "OK"
// 403: "Forbidden"
// 404: "Page not found"

.statusText
// Returns the status-text (e.g. "OK" or "Not Found")</code></pre>

                <ul>
                    <li>
                        <a href = "https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp"
                           target = "_blank">https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href = "https://www.w3schools.com/tags/ref_httpmessages.asp"
                           target = "_blank">https://www.w3schools.com/tags/ref_httpmessages.asp</a>
                    </li>
                </ul>

                <script></script>

                <h5>Exercice 11 : A.J.A.X.</h5>

                // ex2019_js11.js ligne 12 let reponse = req.responseText; modifié en JSON.parse(req.responseText);

                car ex2019_js11.php à modifié 1, 2, 3, 4 par {nom & prenom} // le ex2019_js11.php pourrait utilisé un switch‑case.

                Il faut aussi tratier l'objet en ajouté en ligne 14 :
                <pre><code class = "language-javascript line-numbers">let texte = "";
				for (const item in reponse) {
					texte += item  + " : " reponse[item] + "<br/>";
					innerHTML = texte; en place de reponse.
				}</code></pre>

            </fieldset>

            <fieldset>
                <legend><h4 id = "titleH32019-10-15-09H00">
                        <a href = "?#title-h2-table-of-contents">2019‑10‑15 ‒ 09H00</a></h4>
                </legend>

                <pre><code class = "language-javascript line-numbers">For ($i in $variable) {};
// le $i represnete l'inidice du talbeau ou bien le nom du parametre.
For ($i of $variable) {};
// le $i represente…</code></pre>

                <table class = "standard-table">
                    <tbody>
                    <tr>
                        <td class = "header">Value</td>
                        <td class = "header">State</td>
                        <td class = "header">Description</td>
                    </tr>
                    <tr>
                        <td><code>0</code></td>
                        <td><code>UNSENT</code></td>
                        <td>Client has been created. <code>open()</code> not called yet.</td>
                    </tr>
                    <tr>
                        <td><code>1</code></td>
                        <td><code>OPENED</code></td>
                        <td><code>open()</code> has been called.</td>
                    </tr>
                    <tr>
                        <td><code>2</code></td>
                        <td><code>HEADERS_RECEIVED</code></td>
                        <td><code>send()</code> has been called, and headers and status are available.</td>
                    </tr>
                    <tr>
                        <td><code>3</code></td>
                        <td><code>LOADING</code></td>
                        <td>Downloading; <code>responseText</code> holds partial data.</td>
                    </tr>
                    <tr>
                        <td><code>4</code></td>
                        <td><code>DONE</code></td>
                        <td>The operation is complete.</td>
                    </tr>
                    </tbody>
                </table>

                <h4><a href = "?#title-h2-table-of-contents">Exercice 12</a></h4>

                Deux verison, la seconde est la fléché, en JavaScript =>
                <pre><code class = "language-javascript line-numbers">function($x) {
	return 3 + $x
};
// équivaut en flécher.
// ⚠ la fônction flécher ne ħa pash besoin de noter function précédemmênt.
$x => 3 + $x</code></pre>

                <pre><code class = "language-javascript line-numbers">function () {
	return 33;
}:
// équivaut en flécher.
() => 33</code></pre>

                <pre><code class = "language-javascript line-numbers">function ($x, $y) {
	return $x + $y;
};
// équivaut en flécher.
($x, $y) => $x + $y</code></pre>

                <pre><code class = "language-javascript line-numbers">function ($x) {
	console.log($x);
	$x = $x + 1;
	console.log($x);
}
// équivaut en flécher.
$x => {
	console.log($x);
	$x = $x + 1;
	console.log($x);
}</code></pre>

            </fieldset>
        </section>

        <!-- Begin 2019‑10‑15 ‒ 13H00 -->
        <section>

            <fieldset>
                <legend><h4 id = "titleH32019-10-15-13H00">2019‑10‑15 ‒ 13H00 :</h4></legend>

                <h5><a href = "?#title-h2-table-of-contents"><h5 id = "titleH4Exercice13">Exercice 13 :</h5></a></h5>

                <div></div>

                <hr>

                <p>En javascript ce n'est pash du sequentiel,<br> mais de l'evenementail de ou le
                    <code class = "language-javascript line-numbers">.then()</code> et pash :</p>
                <pre><code class = "language-php line-numbers">instruction;
instruction;<br>
instruction;</code></pre>

                <h5>RegEX</h5>

                <pre><code class = "language-javascript line-numbers">var regex1 = /\w+/; // pash de quote, pash une chaine de caractere.
var regex2 = new RegExp('\\w+');</code></pre>

                <script></script>
            </fieldset>
        </section>
        <!-- End 2019‑10‑15 ‒ 13H00 -->

        <section>
            <fieldset>
                <h4>2019‑10‑22 ‒ 09H55</h4>

                <pre><code class = "language-html line-numbers">&lt;!-- H.T.M.‑L. --&gt;
&lt;table&gt;
	&lt;tbody id="tbody"&gt;
		&lt;tr&gt;
			&lt;td&gt;Dubois&lt;/td&gt;
			&lt;td&gt;Louis&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</code></pre>

                <pre><code class = "language-javascript line-numbers">/* JavaScript */

// Construction de ligne.
let $tr = document.createElement("tr");

// Construit la cellule
let $tdNom = document.createElement("td");
$tdNom.innerHTML = pers.nom;

// Construit la seconde cellule
$let $tdPrenom = document.createElement("td");
$tdPrenom.innerHTML = pers.prenom;

// Ajoute les cellules dans la ligne
$tr.appendChild($tdNom);
$tr.appendChild($tdprenom);

// Ajoute la ligne à la suite du tbody
document.getElementById("tbody").appendChild($tr);</code></pre>

                <br>

                <p>.lastChild est plus lourd, le prof prefere utilisé un pointeur.</p>

                <h5>ex2019_14.js</h5>

                <p>ligne 25 : `nom: ${user.nom}` </p>

                <p>Trier deux elements, 25 < 32,<br> dans beaucoupd elanugage on aprt du princiepe que ABC est plush pette que XYZ,<br> en
                    <abbr title = "American Standard Code for Information Interchange">A.S.C.I.I.</abbr>,<br> par contre en javascript, comme on utilise du J.S.O.N. on doit employé localCompare (ligne 17).
                </p>

                <p>${} : « multi‑line stri‑ng’s inter‑pola‑tion » en
                    <abbr title = "Personal Home Page / PHP : Hypertext Preprocessor">P.H.P.</abbr>, on peut utiliser directement des variables,<br> il ont décidé qeue le backquote sont l'affichage, et si on veut appeller la variable,<br> on doit employé ${} dans ce cas ${user.name}…
                </p>

                listPays.php ligne 11 :
            </fieldset>
        </section>

        <section>
            <fieldset>
                <h4>2019‑10‑22 ‒ 11H25 ‒ Ex2019_15&nbsp;:</h4>

                <ul>
                    <li>filter [BE]<br> ↓<br> Belgique,<br> benin.</li>
                    <li>Ajoute checkbox</li>
                    <li>➡️<br> Copier uniquement les elements cochés.</li>
                </ul>

                <pre><code class = "language-php line-numbers">&lt;?php
  $idP= $_GET['idPays'];
  $pdo=new PDO('mysql:host=localhost; dbname=paysmonde; charset=utf8',
               'root', '');

  $statement=$pdo->prepare("SELECT * FROM pays WHERE idP = :idP");
  $statement->execute([':idP'=>$idP]);
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);

  echo $json;
?></code></pre>

                <pre><code class = "language-php line-numbers">&lt;?php
  $filtre= $_GET['filtrePays'];
  $pdo=new PDO('mysql:host=localhost; dbname=paysmonde; charset=utf8',
               'root', '');

  $statement=$pdo->prepare(
      "(SELECT idP, nomFrP
          FROM pays
         WHERE nomFrP
          LIKE :filtre1
      ORDER BY nomFrP ASC;)"
      ." UNION "
     ."(SELECT idP, nomFrP
          FROM pays
         WHERE nomFrP
          LIKE :filtre2
      ORDER BY nomFrP ASC)"
     );
  $statement->execute([':filtre1'=>$filtre.'%', /* chaîne + % = tout. */
                       ':filtre2'=>'%'.$filtre.'%']);
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);

  echo $json;
?></code></pre>

                <h5>H.T.M.‑L. :</h5>
                <pre><code class = "language-html line-numbers">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
	&lt;head&gt;
		&lt;meta charset="UTF-8" /&gt;
		&lt;title&gt;AJAX : liste des utilisateurs&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;input type="text" id="txtFiltreNom" /&gt;
		&lt;br /&gt;
		&lt;div id="divUsers"&gt;&lt;/div&gt;

		&lt;script src="ex2019_14.js"&gt;&lt;/script&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>

                <pre><code class = "language-javascript line-numbers">// ============================================================
const TEXTE_PAYS = document.getElementById("Ex2019_15TxtPays");
const DIV_LISTE_PAYS = document.getElementById("Ex2019_15DivListePays");

TEXTE_PAYS.addEventListener("input", afficheListePays);

// ============================================================

function afficheListePays() {
//console.log("Liste des pays");
let $filtrePays = TEXTE_PAYS.value.trim();
console.log("filtrePays :" + $filtrePays);

// IL faut absoulement inseré le parametre.
fetch("./prof/ex2019_15/listePays.php?filtrePays=" + $filtrePays)
/*
    // Quand l'info reviendra :
    .then(reponse => {
        console.log("réponse :", reponse);
    });
    */
// Transformation en format JSON
    .then($reponse => $reponse.json())
    .then($listePays => {
        // console.log("listePays :", $listePays);
        DIV_LISTE_PAYS.innerHTML = "";
        for (const PAYS of $listePays) {
            // console.log("pays :", pays);
            // console.log("pays.nomFrP :", pays.nomFrP);
            let $paragraphPays = document.createElement("span");
            $paragraphPays.innerHTML = PAYS.nomFrP + "<br/>";

            DIV_LISTE_PAYS.appendChild($paragraphPays);
        }
    });
};</code></pre>

                <div>
                    <label for = "Ex2019_15TxtPays">Pays</label>

                    <input type = "text"
                           id = "Ex2019_15TxtPays"><br> <input type = "text"
                                                               value = "⇒"
                                                               id = "Ex2019_15Btn">

                </div>

                <div id = "Ex2019_15DivListePays"></div>
                <div id = "Ex2019_15DivPaysSelect"></div>

                <script>
                    "use strict";

                    // ============================================================
                    const TEXTE_PAYS = document.getElementById("Ex2019_15TxtPays");
                    const DIV_LISTE_PAYS = document.getElementById("Ex2019_15DivListePays");

                    TEXTE_PAYS.addEventListener("input", afficheListePays);

                    // ============================================================

                    function afficheListePays() {
                        //console.log("Liste des pays");
                        let $filtrePays = TEXTE_PAYS.value.trim();
                        console.log("filtrePays :" + $filtrePays);

                        // IL faut absoulement inseré le parametre.
                        fetch("./prof/ex2019_15/listePays.php?filtrePays=" + $filtrePays)
                            /*
								// Quand l'info reviendra :
								.then(reponse => {
									console.log("réponse :", reponse);
								});
								*/
                            // Transformation en format JSON
                            .then($reponse => $reponse.json())
                            .then($listePays => {
                                // console.log("listePays :", $listePays);
                                DIV_LISTE_PAYS.innerHTML = "";
                                for (const PAYS of $listePays) {
                                    // console.log("pays :", pays);
                                    // console.log("pays.nomFrP :", pays.nomFrP);
                                    let $paragraphPays = document.createElement("span");
                                    $paragraphPays.innerHTML = PAYS.nomFrP + "<br />"; // nomFrP : NomFrançaisDuPays.

                                    DIV_LISTE_PAYS.appendChild($paragraphPays);

                                    // Chk = checkbox
                                }
                            });
                    };
                </script>

            </fieldset>
        </section>

        <section>

            <fieldset>

                <h3>2019‑11‑05 ‒ Mardi :</h3>

                <pre><code class = "language-javascript line-numbers">for in
for of</code></pre>

                <pre><code class = "language-javascript line-numbers">// Exemple :
let $tab ["ab", "xy", "AB", "ZX"];

in 1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;// index
of ab&nbsp;xy&nbsp;ab&nbsp;zx // valeur</code></pre>
                <p>même type que l'element qui est dans le tableau. (typade dynamique).

                <p>Difference dans la facon d'acceder.</p>

                <pre><code class = "language-javascript line-numbers">for(let $i in tab) {
      … tab[$i] …
}

for(let $el of tab) {
    … $el …
la on imprime directement la variable;
on ne fait plush referecne au tbleau.

// Objet
let $pers = { "nom" : "Dubois",
              "age" : 25,
              "taille" : 175};
// On utilise in car on besoin de key & value.

for (let $a in pers) {
    … pers[$a] …
}</code></pre>

                <pre><code class = "language-javascript line-numbers">pers.nom</code></pre>

                <p>norm‑ale‑ment en objet on fait cela,<br> mais pash en javascript.</p>

                <p>On peut donc faire cela :</p>

                <pre><code class = "language-javascript line-numbers">pers[nom]</code></pre>

                <p>En JSON cela fonctionne, mais un objet javascript, les objets peuvent aussi contenir des méthodes et risque de les afficher. JSON ne peut pash reprendre des méthodes.</p>

                <pre><code class = "language-javascript line-numbers">Objet « of » : { … , … }
Array « in » : ( … , … )</code></pre>

                <p>Promise permet de jouer avec cette asyncrhonisem.</p>

                <h5>jQuery :</h5>
                <pre><code class = "language-javascript line-numbers">$x.hide(3000); // 3 secondes pour cacher. Grace à un set timeout (en arrière plain.)
                    $x.show();</code></pre>

                <h6>PROMISES</h6>

                <p>Sa remplace les callbacks.</p>

                <pre><code class = "language-javascript line-numbers">// CallBack
$x.hide(3000, $x.show(2000, …));
// Execute show après les 3 secondes,
// afin de ne pash que il le ce lance immediatement,
// comme la méthode précedente.</code></pre>

                <pre><code class = "language-javascript line-numbers">// Promajzë / Promise
$x.hide(2000)
.then( … ) // execute que qnad tout c'est bien passé.
.then( … );</code></pre>

                <p>Il on rajouté</p>
                <pre><code class = "language-javascript line-numbers">await
async</code></pre>

                <p>Sa simplifie l'écriture des promises.</p>
                <pre><code class = "language-javascript line-numbers">x = fetch … ;
// Mais y a un risque de décalage.
// Donc on écrirait :
await x = fetch … ;</code></pre>

                Segolene
                <div class = "ui segment"><h4>Code Postaux :</h4>

                    Exerice 16 :
                    <p>Exercice on input un chiffre postal et la localité qui correspond apparaît.</p>

                    <p>Je n'avais pash bien compris les consignes. Et j'avais affihcer les CP dans une div alors que il fallait un select (liste déroulante.)</p>

                    Ma version : <input type = "text"
                                        id = "Ex2019_16CodePostal"
                                        placeholder = "Inséré le code postal"><br>

                    <div id = "Ex2019_16Localité"
                         placeholder = "Localité"
                         readonly>

                    </div>

                    <script>
                        "use strict";

                        // ============================================================
                        const CODE_POSTAL = document.getElementById("Ex2019_16CodePostal");
                        const LOCALITÉ = document.getElementById("Ex2019_16Localité")

                        CODE_POSTAL.addEventListener("input", afficheListeLocalitee);

                        // ============================================================

                        function afficheListeLocalitee() {
                            // window.alert("Liste des pays");
                            // Fonctionne

                            let $filtreCodesPostaux = CODE_POSTAL.value.trim();
                            // window.alert("Codes postaux :" + $filtreCodesPostaux);
                            // Fonctionne

                            // Il faut absolument inseré le parametre.
                            fetch("./php/2019-11-05_-_code_postal.php?filtreCodesPostaux=" + $filtreCodesPostaux)

                                // Transformation en format JSON
                                .then($reponse => $reponse.json())
                                .then($listeLocalité => {

                                    // console.log("liste localité :", $listeLocalité);
                                    LOCALITÉ.innerHTML = "";
                                    for (const LISTE_LOCALITÉ of $listeLocalité) {
                                        // console.log("pays :", pays);
                                        // console.log("pays.nomFrP :", pays.nomFrP);
                                        let $paragraphLocalité = document.createElement("span");
                                        $paragraphLocalité.innerHTML = LISTE_LOCALITÉ.commune + "<br />";

                                        LOCALITÉ.appendChild($paragraphLocalité);
                                        // Chk = checkbox
                                    }
                                });
                        };
                    </script>

                    <p>Version prof :</p>

                    // ComboBox <label for = "comboBoxCP">CP:</label> <select name = "comboBoxCP"
                                                                              id = ""></select>

                    <script>
                        // Initialement l'html pointera à 1000, mais le second select n'affiche rien,
                        // on devra remedier à cela. Et puis pq brussels alors que l'o est à Namur / Namen.

                        // Au début les poiteur,
                        // puis les méthodes et fonctions.

                        // Mise en place du mécanisme evenementiel.
                        // ling4

                        // majCboCP = mise à jour ComboBox Code Postal

                        // A chaque étapge bien lancé un console.log pour être sur que êllë fonctionne.

                        fetch // Pash de parametre.
                        console.log(); // emmet : clo

                        // $optCP.innerHTML à cause des égaux on ne peut pash mettre diretment à la suite de createElement("option");

                        // ligne 13 du P.H.P. commune au peu mettre aussi un bindparam

                        // Ligne 19 ajoute nettoyage : $cboCP.innerHTML = "";
                        // Linge 20 affichage par défaut.

                        // ligne 25 majCboLoc = mise à jour ComboBox Localité

                        // On déplace la ligne nettoyage en dehors de la boucle pour ne pas avoir de erreur en cas de remise de la premier selection sur Choisissez

                        // $cboLoc.removeAttribut()… Remplacé par :
                        // $cboLoc.attribut = true; // Puis.
                        // $cboLoc.hidden = true;
                        // $DivLoc.hidden = true; // creez une div car CPdans label appariassant

                        // Le prof estieme que le code pourrait etre amelioré pour éviter les recurrances & redondance de nettoyage par exemple…
                    </script>

                    <p>Le prof voudrait une variantes, quand on tape une localité un zone de texte ou on tape un chiffre ou un terme il nous montre une div avec le terme ou chiffre adequate, un peu comme liste de pays. Puis qund on click il copie le nom quelque part autre &lt;div&gt; vous avez choisie la ville $ville de avec pour code poste $cp.</p>
                    Loc [Nom] 5000 Namur 5004 Bouge.

                    <h5>2019‑11‑12 ‒ 09H00 :</h5>

                    Exercice 16B
                    <ul>
                        <li>1ère étape : filtrage.</li>
                        <li>2ème étape : remplissage de la liste déroulante.</li>
                        <li>3ème étage selection de l'element.</li>
                    </ul>

                    <p>liste déroulante, <code>.addEventListener()</code> : change</p>

                    <p>Quand on efface la premier lettre est vide il faut tenter de éviter que il cherche.</p>

                    <p>Le mécanisme de filtrage on l'avait déjà fait.</p>

                    <p>Dans le cas ou le CP n'a que un choix. Il faudrait passé la selection manuel.</p>

                    <pre><code class = "language-javascript line-numbers">let nbr = document.getElementById("txtNbr");
nbr.value = nbr.value + 1;</code></pre>
                    <pre><code class = "language-javascript line-numbers">document.getElementById → 1
document.getElementByName → *
document.getElementByTag → *
document.getElementByClass → *</code></pre>

                    <p>Nouweau</p>

                    <pre><code class = "language-javascript line-numbers">document.querySelector("") → 1

document.querySelector("#truc.Rouge") → *
// Attentation renvoi tableau donc crochet pour chercher.
↳
// jQuery
$("#trucRouge")</code></pre>

                    <pre><code class = "language-javascript line-numbers">element propriety attribute.
// Tous les elements n'ont pash les meme propriétés.

.setAttribute
.getAttribute
.removeAttribute
.toggleAttribute // Si n'existe pash.</code></pre>

                    <pre><code class = "language-javascript line-numbers">createElement
createTextNode // Noeud sa reprend tout, un element est un noeud.
                        TextNode est un noeud spécialisé.

&lt;h1&gt;Coucoulme&lt;/h1&gt;
Element  TextNode</code></pre>

                    <pre><code class = "language-javascript line-numbers">document.createElement("p");
// Il faut le placer.
document.getElementById("div1").appendChild(); // Voir photo.
// Il est important de créer une variable du createElement pour pouvoir interagir.
let $newP = document.createElement("p");
    $newP.innerHTML = "coucou";

document.ElementById("div2").appendChild($newP);
// Il le déplace, c'est importante. Il ne fait pash un doublon.</code></pre>

                    // Copie c'est clone. Mais il y deux version, une en profondeur ou en surface. Il ne copie pash les évènements.

                    // Avec une fonction anonyme on ne peut suprrimier un eventListener car il n'y a pash de pointeur dans les fonction anonyme.

                    <h5>Le Timer [2019‑11‑12 10H22]</h5>

                    <pre><code class = "language-javascript line-numbers">.setInterval(saluer, 3000) // Toute les × milli‑secondes. Mecanisme de ????.
// Pash de parenthese à l'appel de la fonction. Car si il ont les met, il affichera le result et ne fera pash l'appel de la fonction.
.clearInterval(saluer, 3000)
// Stop j'arrete.
// Oui mais lequel ?
// Pour le cibler on crée une variable.
let $t1 = setInterval(saluer, 3000);
clearInterval($t1);

.setTimeout() // Après × secondes.
.clearTimeout()</code></pre>

                    <p>L'objectif est de gerer le temps.</p>

                    <h6>Quommênthë récupérer le temps ?</h6>

                    <pre><code class = "language-javascript line-numbers">let $now new Date();
// Vous créez une nouvelle variable.

now.getDay()      // ⇒ 12. Jour.
now.getMonth()    // ⇒ Novembre.<sup>ème</sup> Mois. {0 à 11} ⚠
now.getFullYear() // ⇒ 2019. Année.
now.getHours()    // ⇒ 10. Heure.
now.getUtcHours() // ⇒ 10. Heure (en temps universel).

now.setMonth(11)  // ⇒ Décembre. Mois.</code></pre>

                    <h6>Date de anniversaire.</h6>

                    <pre><code class = "language-javascript line-numbers">// On récupère de une DB
// $DateDeNaissance (25/04/1979)

let $today = new Date();
let $DateDeNaissance = new Date($today.getFullYear(), // ⇒ 2019
                                $today.getMonth(),    // ⇒    3
                                $today.getDay());     // ⇒   25

let $dateAnniversaire = $DateNaissance;
$dateAnniversaire.setFullYear($today.getFullYear());

let $age = $today.getFullYear() - $DateNaissance.getFullYear();
if($today < $dateAnniversaire) {
    age …
};</code></pre>

                    <h5>Exercice 17</h5>

                    <p>Temp : [display] btn‑start, btn‑lap, btn‑stop btr reset</p>

                    <pre><code class = "language-javascript line-numbers">Start = $dateDébut - Date();

Stop = now ⇐ $dateDébut
       now - $dateDébut</p></code></pre>

                    <label id = lblChrono
                           for = "ex17textChrono">Temps :</label> <input id = "ex17textChrono"
                                                                         name = "ex-17-text-chrono"
                                                                         type = "text"> <input type = "button"
                                                                                               id = "ex17BtnStart"
                                                                                               value = "Start">
                    <input type = "button"
                           id = "ex17BtnLap"
                           value = "Lap"
                           disabled> <input type = "button"
                                            id = "ex17BtnStop"
                                            value = "Stop"
                                            disabled> <input type = "button"
                                                             id = "ex17BtnReset"
                                                             value = "Reset"
                                                             disabled>

                    <div id = "ex17DivLap"></div>
                    <script>
                        "use strict"

                        // Phase 1 : création des constantes.
                        const BTN_START = document.getElementById("ex17BtnStart");
                        const BTN_LAP = document.getElementById("ex17BtnLap");
                        const BTN_STOP = document.getElementById("ex17BtnStop");
                        const BTN_RESET = document.getElementById("ex17BtnReset");
                        const TEXT_CHRONO = document.getElementById("ex17textChrono");
                        const DIV_LAP = document.getElementById("ex17DivLap");

                        // ────────────────────────────────────────────────────────────────────────

                        // Phase 2 : evenement.
                        BTN_START.addEventListener("click", startChrono);
                        BTN_LAP.addEventListener("click", lapChrono);
                        BTN_STOP.addEventListener("click", stopChrono);
                        BTN_RESET.addEventListener("click", resetChrono);


                        // Phase 05
                        // Ce temps on aura besoin dans tous les elements, donc global.
                        let $now = new Date();

                        // Phase 08
                        let $startTime; // Global.
                        // Phase 13
                        let $timer;     // Global.

                        // ────────────────────────────────────────────────────────────────────────
                        // Phase 06 : Gestion du Chrono, création des 4 fonctions vide.
                        // ────────────────────────────────────────────────────────────────────────
                        function startChrono() {
                            // window.alert("Start lancé");

                            $startTime = new Date();
                            // console.log("startTime :", $startTime)
                            // window.alert("startTime : " + $startTime)

                            // Phase 12 : Affichage chrono.
                            $timer = setInterval(affichageChrono, 1);

                            // Phase 07 : Activation des boutons.
                            BTN_START.disabled = true;
                            BTN_LAP.disabled = false;
                            BTN_STOP.disabled = false;
                            BTN_RESET.disabled = true;
                            // RESET.toggleAttribute("disabled", true);
                        }

                        function lapChrono() {
                            // window.alert("Lap.");

                            let $now = new Date();
                            let $time = $now - $startTime; // Durée en ms.
                            // console.log("Lap time : ", $time);
                            // window.alert("Lap time : " + $time);

                            // Phase 10 :
                            DIV_LAP.innerHTML += tps2String($time) + "<br>";
                        }

                        function stopChrono() {
                            // window.alert("Chrono stoppé.");

                            // Phase 12
                            clearInterval($timer);

                            // Phase 08
                            let $now = new Date();
                            let $time = $now - $startTime; // Durée en ms.
                            // console.log("Final Time : ", $time);
                            // window.alert("Final Time : " + $time);

                            // Phase 10 :
                            DIV_LAP.innerHTML += tps2String($time) + "<br>";

                            // Phase 12 : Affichage chrono.
                            TEXT_CHRONO.value = tps2String(0);

                            // Phase 07 : Activation des boutons.
                            BTN_START.disabled = true;  // Désactivé.
                            BTN_LAP.disabled = true;  // Désactivé.
                            BTN_STOP.disabled = true;  // Désactivé.
                            BTN_RESET.disabled = false; // Activé.
                            // RESET.toggleAttribute("disabled", false);

                        }

                        function resetChrono() {

                            // window.alert("Start lancé");
                            DIV_LAP.innerHTML = "";
                            TEXT_CHRONO.value = tps2String(0);

                            // Phase 07 : Activation des boutons.
                            BTN_START.disabled = false; // Actif
                            BTN_LAP.disabled = true;    // Inaccessible.
                            BTN_STOP.disabled = true;   // Inaccessible
                            BTN_RESET.disabled = true;  // Inaccessible
                            // RESET.toggleAttribute("disabled", true);

                            // Phase 11:
                            DIV_LAP.innerHTML = "";
                        }

                        // Phase 12 : Affichage chrono.

                        function affichageChrono() {
                            // clearTimeout($timer);

                            let $now = new Date();
                            let $time = $now - $startTime; // Durée en m.s.
                            TEXT_CHRONO.value = tps2String($time);

                            $timer = setTimeout(affichageChrono, 1);
                        }

                        // ────────────────────────────────────────────────────────────────────────
                        // Phase 09 : Outils
                        // ────────────────────────────────────────────────────────────────────────

                        // Converter m.s. ⇒ hh:mm:ss,ms
                        function tps2String($tps_ms) { // $tps_ms : Paramètre.
                            let $temps = new Date($tps_ms);

                            // return "tps en ms" + $temps;

                            // Transformer le temps standard en temps heure & seconde.
                            // Tue Nov 12 2019 14:00:27 GMT+0100 (Central European Standard Time)
                            let $heures = $temps.getUTCHours();
                            if ($heures < 10) $heures = "0" + $heures;
                            // Premiere méthode, Ecriture simplifié sans accolade.

                            let $minutes = $temps
                                .getUTCMinutes()
                                .toString()
                                .padStart(2, "0");
                            // Celle que le prof conseil.

                            let $secondes = $temps.getUTCSeconds();
                            $secondes = ("0" + $secondes).slice(-2);
                            // Autre méthode.

                            let $milliSecondes = $temps
                                .getUTCMilliseconds()
                                .toString()
                                .padStart(3, "0");

                            return $heures + ":" + $minutes + ":" + $secondes + "," + $milliSecondes;

                        }
                    </script>

                    <h5>ex17b : Faite une variante avec la valeur primaire du lap + l'addition des lap precedents.</h5>

                    <p>Nbr du tour, temps du tour, addition des tours successif.</p>

                    <p>ex17c : Afficher (avec une classe) à chaque fois le meilleur tour.<br> et quand on appuit stop, il affiche le meilleur temps final.
                    </p>

                    <h4>Exercice18A</h4>

                    <h5>Les timers…</h5>

                    <p>Compte à rebourd en progress‑bar 100% à 0%.</p>
                    <p>Timer 1 : [ input ] Start Stop</p>

                    <label for = "ex18Timer">Timer 1 : <input type = "text"
                                                              id = "ex18Timer"
                                                              name = "ex-18-timer"></label> <label for = "ex18BtnStart"><input type = "button"
                                                                                                                               id = "ex18BtnStart"
                                                                                                                               name = "ex-18-btn-start"
                                                                                                                               value = "start"
                                                                                                                               disabled></label>
                    <label for = "ex18Stop"><input type = "button"
                                                   id = "ex18Stop"
                                                   name = "ex-18-btn-stop"
                                                   value = "stop"
                                                   disabled></label><br> <br>
                    <progress id = "ex18Progress"
                              max = "100"
                              value = "100"></progress>

                    <script>
                        "use strict";

                        // Phase 1 : création des constantes.
                        const TEXT_TIMER = document.getElementById("ex18Timer");
                        const BTN_START = document.getElementById("ex18BtnStart");
                        const BTN_STOP = document.getElementById("ex18BtnStop");
                        const PROGRESS_CHRONO = document.getElementById("ex18Progress");

                        // ────────────────────────────────────────────────────────────────────────

                        // Phase 2 : evenement.
                        TEXT_TIMER.addEventListener("keyup", activeStart);
                        BTN_START.addEventListener("click", startTimer);
                        BTN_STOP.addEventListener("click", stopTimer);

                        // ────────────────────────────────────────────────────────────────────────

                        function activeStart() {

                            window.alert("activeStart lancé.");
                            BTN_START.disabled = false;
                        }

                        function startTimer() {


                        }

                        function stopTimer() {


                        }
                    </script>

                </div>
            </fieldset>
        </section>

        <section>
            <fieldset>
                <h3 id = "titleH22019Y11M19D09H00"><a href = "?#title-h2-table-of-contents">2019‑11‑19 ‒ 09H00</a></h3>

                <div class = "ui segment">

                    <h4><a href = "?#title-h2-table-of-contents">Exercice 19 :</a></h4>

                    <input type = "button"
                           id = "ex19InputReset"
                           value = "RéInitialisé"
                           style = "width: 10em;"><br><br>

                    <div id = "ex19DivCboGroupePays">
                    </div>

                    <div id = "ex19DivButtonCommencer">

                        <hr id = "ex19DivButtonCommencerHr">

                    </div>

                    <div id = "ex19DivListeParticipant"
                         style = "display: none;">
                        <h4>Liste’s de’s participant’s :</h4>

                        <p class = "ui message info">Utiliser « CTRL + CLIQUE » pour sélectionner plusieurs participants.</p>

                        <select name = "ex19_liste_de_selection_des_participants"
                                id = "ex19ListeDeSelectionDesParticipants"
                                title = "Sélecteur de pays."
                                style = "height: 50em; width: 10em;"
                                multiple
                                class = "ui fluid dropdown">

                        </select>
                        <script>$('#ex19ListeDeSelectionDesParticipants')
                                .dropdown()
                            ;</script>
                        <br> <input type = "button"
                                    id = "ex19InputBoutonAjouter"
                                    style = "width: 10em;"
                                    value = "Ajouter">

                        <hr>
                    </div>

                    <input type = "button"
                           id = "ex19InputBoutonCommencer"
                           value = "Cômmêncer"
                           style = "width: 10em;">

                    <div id = "ex19DivAffichageDesParticipantsActif"
                         style = "display:  none;">

                        <table style = "width: auto;">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Pré‑nom</th>
                                <th>Taille</th>
                                <th>Poids</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody id = "ex19TBodyAffichageDesParticipants">

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class = "ui segment">

                    <h5 id = "titleH4Consigne"><a href = "?#title-h2-table-of-contents">Consigne</a></h5>

                    <figure class = "cônsi-jne">
                        <img src = "assets/img/qours/2019-11-19_-_11h33m47s_VID.png"
                             alt = "Qônsi‑ʒne’s du Professeur Servais.">
                        <img src = "assets/img/qours/2019-11-19_-_11h55m22s_VID.png"
                             alt = "Qônsi‑ʒne’s du Professeur Servais.">
                        <figcaption>Qônsi‑ʒne’s du Professeur Servais.</figcaption>
                    </figure>

                    <h6><a href = "?#title-h2-table-of-contents">Équipe :</a></h6>

                    <ol>
                        <li><b>Choix du pays :</b> radio.</li>
                        <li>Choix des participants
                            <ul>
                                <li>Macaroni</li>
                                <li>Spagheti</li>
                                <li>…</li>
                            </ul>
                        </li>
                        <li>Ajouter
                            <ul>
                                <li>Fitonacci. Prenom. Taille. Poids. [Supprimer]</li>
                                <li>DeVinci. Leonard. Taille. Poids. [Supprimer]</li>
                            </ul>
                        </li>
                        <li>Une fois choisi on ne peut plus rechoisir cette personne.</li>
                        <li>On peut aussi faire une seconde colonne pour choisir un second pays.</li>
                        <li>Calculer la masse total de’s participant’s.</li>
                    </ol>
                </div>

                <script>
                    "use strict";

                    //----------------------------------------------------------------------------------------
                    // init variables…
                    //----------------------------------------------------------------------------------------
                    const EX19_RADIO_GROUPE_PAYS = document.getElementById("ex19DivCboGroupePays");
                    const EX19_DIV_BUTTON_COMMENCER = document.getElementById("ex19InputBoutonCommencer");
                    const EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS = document.getElementById("ex19DivListeParticipant");
                    const EX19_LISTE_SELECTION_DES_PARTICIPANTS = document.getElementById("ex19ListeDeSelectionDesParticipants");
                    const EX19_INPUT_BOUTON_AJOUTER = document.getElementById("ex19InputBoutonAjouter");
                    const EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF = document.getElementById("ex19DivAffichageDesParticipantsActif");
                    const EX19_TBODY_AFFICHAGE_DES_PARTICIPANTS = document.getElementById("ex19TBodyAffichageDesParticipants");
                    const EX19_DIV_BUTTON_COMMENCER_HR = document.getElementById("ex19DivButtonCommencerHr");
                    const EX19_INPUT_RESET = document.getElementById("ex19InputReset");

                    //----------------------------------------------------------------------------------------
                    // Lancement fonction du listage des pays…
                    //----------------------------------------------------------------------------------------
                    listePaysAJAX();

                    //----------------------------------------------------------------------------------------
                    // init évènements….
                    //----------------------------------------------------------------------------------------
                    EX19_DIV_BUTTON_COMMENCER.addEventListener("click", listeSelective);
                    EX19_INPUT_RESET.addEventListener("click", réinitialisé);

                    //----------------------------------------------------------------------------------------
                    // Gestion de l'affichage des pays.
                    //----------------------------------------------------------------------------------------

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

						EX19_DIV_BUTTON_COMMENCER.append($ex19BoutonCommencerHr);
						EX19_DIV_BUTTON_COMMENCER.append($ex19BoutonCommencer);
					}
					*/

                    //----------------------------------------------------------------------------------------
                    // Réinitialisation du Combo‑Box de’s pays en cas de erreur de choix.
                    //----------------------------------------------------------------------------------------
                    function réinitialisé() {
                        EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS.setAttribute("style", "display: none;");
                        EX19_RADIO_GROUPE_PAYS.setAttribute("style", "display: initial");
                        EX19_DIV_BUTTON_COMMENCER.setAttribute("style", "display: initial;");
                        EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF.setAttribute("style", "display: none;");
                        EX19_INPUT_RESET.disabled = true;
                    }

                    //----------------------------------------------------------------------------------------
                    // Extraction des pays coché.
                    //----------------------------------------------------------------------------------------


                    function listeSelective() {

                        EX19_DIV_LISTE_PARTICIPANT_PAR_PAYS.setAttribute("style", "display: initial;");
                        EX19_DIV_BUTTON_COMMENCER.setAttribute("style", "display: none;");
                        EX19_RADIO_GROUPE_PAYS.setAttribute("style", "display: none;");
                        EX19_DIV_BUTTON_COMMENCER_HR.setAttribute("style", "display: none;");
                        EX19_INPUT_RESET.disabled = false;

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
                                        // gestion de’s participants
                                        // les trois petit point destructure le resultat / liste,
                                        // en element et le transforme en tableau car on utilise [].

                                        EX19_DIV_AFFICHAGE_DES_PARTICIPANTS_ACTIF.setAttribute("style", "display: initial;");

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
                </script>

                <hr>

                <div class = "ui segment">

                    <h5>Correctif 19 du prof :</h5>

                    // localCompare car comme ce n'est as un ombre il faut le mettre. // .sort((x,y) => x.nomP > y.nomP)) {} // .sort((x,y) => x.nomP.localCompare(y.nomP)) {}
                </div>

                <h5><a href = "?#title-h2-table-of-contents">Memorendum</a></h5>

                <pre><code class = "language-javascript line-numbers">.&nbsp;&nbsp;&nbsp;// Invocation.</li>...&nbsp;// Déstructération.
::&nbsp;&nbsp; //
:&nbsp;&nbsp;&nbsp; // QuerySelector CSS.
=>&nbsp;&nbsp; // Fonction fléché.
`{text ${$var1} ${$var2}` // Fonction fléché.</code></pre>
            </fieldset>

        </section>

        <section>

            <fieldset>
                <div class = "ui segment">
                    <h4>20191119 13H00</h4>
                    correction 17B & 18.
                </div>

                <h4><a href = "?#title-h2-table-of-contents">2019‑11‑19 ‒ 14H30 :</a></h4>

                <h5><a href = "?#title-h2-table-of-contents">Rappel :</a></h5>
                <pre><code class = "language-javascript line-numbers">document.getElementById("#truc");
document.querySelectorAll("#truc.");

// Jquery
$("#truc.xyz").css("background-colour").hide();

// ────────────────────────────────────────────────────────────────────────

// JavaScript
let $p = document.createElement("p");
$p.innerHTML = "…";
$p.classList.add("…");

// jQuery
let $p = $("&lt;p&gt;", {text: …, class: …, …});</code></pre>
                <script>
                    let $p;

                </script>

            </fieldset>
        </section>

        <section>

            <fieldset><h2><a href = "?#title-h2-table-of-contents">Vue‑J.S.&nbsp;:</a></h2>

                <div class = "ui segment info message">2019‑11‑19 ‒ 14H54 :</div>

                <div class = "ui segment">

                    <h3 id = "titleH4LeFrameWorksJavaScript">
                        <a href = "?#title-h2-table-of-contents">Les FrameWorks JavaScript</a></h3>

                    <ul>
                        <li><strong>Angular :</strong> Google.</li>
                        <li><strong>React :</strong> FaceBook.</li>
                        <li><strong>VueJS :</strong> Evan You.</li>
                    </ul>

                    <p>A un moment il ce sont dit plush de JS dans l'HTML.</p>

                    <pre><code class = "language-html line-numbers">&lt;input type="button" <s <span style = "barrer">onclick="saluer();"</s> id="BtnSaluer" &gt;</code></pre>

                    <pre><code class = "language-javascript line-numbers">document.getElementById("btnSaluer").adEventListener("click", saluer);</code></pre>

                </div>

                <div class = "ui segment info message">2019‑11‑26 ‒ 11H00 :</div>

                <div class = "ui segment">

                    <p>VueJS utilise de’s directive’s.</p>
                    <h5>Vue01.js</h5>
                    <ul>
                        <li><code class = "language-javascript">v-bind</code></li>
                        <li><code class = "language-javascript">v-model</code></li>
                        <li><code class = "language-javascript">v-for</code></li>
                        <li><code class = "language-javascript">v-if</code></li>
                        <li><code class = "language-javascript">v-else</code></li>
                        <li><code class = "language-javascript">v-show</code></li>
                    </ul>
                </div>

                <div class = "ui segment info message">2019-11-27 ‒ 13H00 :</div>

                <div class = "ui segment">

                    <h4>Exemple js01 en E.‑S.6</h4>

                    <pre><code class = "language-html line-numbers">&lt;!-- js01.html --&gt;
&lt;p&gt;
	&lt;label for = "js01TxtNom"&gt;Nom:&lt;/label&gt;

	&lt;input type = "text"
		   id = "js01TxtNom"/&gt;
&lt;/p&gt;</code></pre>

                    <pre><code class = "language-javascript line-numbers">// js01.js
const JS01_TEXTE_NOM = document.getElementById("js01TxtNom");
const JS01_SPAN_NOM = document.getElementById("js01SpanNom");

JS01_TEXTE_NOM.addEventListener("keyup", majSpanNom);

function majSpanNom() {
	JS01_SPAN_NOM.innerHTML = JS01_TEXTE_NOM.value;
}</code></pre>

                    <!-- vue01.html -->
                    <p>
                        <label for = "js01TxtNom">Nom:</label>

                        <input type = "text"
                               id = "js01TxtNom"/>
                    </p>

                    <p>Bonjour <span id = "js01SpanNom"></span> !</p>

                    <script>
                        // vue01.js
                        const JS01_TEXTE_NOM = document.getElementById("js01TxtNom");
                        const JS01_SPAN_NOM = document.getElementById("js01SpanNom");

                        JS01_TEXTE_NOM.addEventListener("keyup", majSpanNom);

                        function majSpanNom() {
                            JS01_SPAN_NOM.innerHTML = JS01_TEXTE_NOM.value;
                        }
                    </script>

                </div>

                <div class = "ui segment">

                    <h4 id = "titleH3VueJS01">
                        <a href = "?#title-h2-table-of-contents"><a href = "?#title-h2-table-of-contents">Vue‑J.S._01</a></a>
                    </h4>
                    <h5>Exemple 1 en Vue‑J.S. :</h5>

                    <pre><code class = "language-html line-numbers">&lt;!-- vue01.html --&gt;
&lt;div id = "vueJS01App"&gt;
	&lt;p&gt;
		&lt;label for = "vueJS01Nom"&gt;Nom:&lt;/label&gt;

		&lt;!-- .lazy décalage en vue. --&gt;
		&lt;input id = "vueJS01Nom" <!-- permet un onChange. -->
			   type = "text"
			   v-model.lazy = "nom"/&gt;
	&lt;/p&gt;

	&lt;p&gt;
		Bonjour &lt;span&gt;{{ nom == "Dominique" ? "Maître" : nom.toUpperCase() }}&lt;/span&gt; ! &lt;/p&gt;

	&lt;h4 id="titleH4VueJS01CheckBox"&gt;CheckBox :&lt;/h4&gt;

	&lt;p&gt;
		&lt;input title = "Afficher la liste de’s loisir’s"
			   type = "checkbox"
			   v-model = "vueJS01affLoisirs"/&gt; afficher la liste des loisirs &lt;/p&gt;

	&lt;!-- Affiche en VueJS. --&gt;
	&lt;ul v-show = "vueJS01affLoisirs"&gt;
		&lt;!-- Boucle For en VueJS --&gt;
		&lt;li v-for = "loisir in loisirs"&gt;{{ loisir }}&lt;/li&gt;
	&lt;/ul&gt;

	&lt;h4 id="titleH4VueJS01Select"&gt;Select & option’s :&lt;/h4&gt;

	&lt;select&gt;
		&lt;option v-bind:value = "loisir"
				v-for = "loisir in loisirs"&gt;{{ loisir }}
		&lt;/option&gt;
	&lt;/select&gt;

	&lt;h4 id = "titleH4VueJS01CheckBox"&gt;CheckBox :&lt;/h4&gt;

	&lt;p v-for = "loisir in loisirs"&gt;

		&lt;input type = "checkbox"
			   v-bind:value = "loisir"/&gt;{{ loisir }}&lt;/p&gt;
&lt;/div&gt;</code></pre>

                    <!-- vue01.html -->
                    <div id = "vueJS01App">
                        <p>
                            <label for = "vueJS01Nom">Nom:</label>

                            <!-- .lazy décalage en vue. -->
                            <input id = "vueJS01Nom"
                                   type = "text"
                                   v-model.lazy = "nom"/>  <!-- permet un onChange. -->
                        </p>

                        <p>
                            Bonjour <span>{{ nom == "Dominique" ? "Maître" : nom.toUpperCase() }}</span> !
                        </p>

                        <h5 id = "titleH4VueJS01CheckBoxList">CheckBox affiche une liste&nbsp;:</h5>

                        <p>
                            <input title = "Afficher la liste de’s loisir’s"
                                   type = "checkbox"
                                   v-model = "vueJS01affLoisirs"/> afficher la liste des loisirs </p>

                        <!-- Affiche en VueJS. -->

                        <ul v-show = "vueJS01affLoisirs">

                            <!-- Boucle For en VueJS -->
                            <li v-for = "loisir in loisirs">{{ loisir }}</li>
                        </ul>

                        <h5 id = "titleH4VueJS01Select">Select & option’s&nbsp;:</h5>

                        <select>
                            <option v-bind:value = "loisir"
                                    v-for = "loisir in loisirs">{{ loisir }}
                            </option>
                        </select>

                        <h5 id = "titleH4VueJS01CheckBox">CheckBox&nbsp;:</h5>

                        <p v-for = "loisir in loisirs">

                            <input type = "checkbox"
                                   v-bind:value = "loisir"/>{{ loisir }}
                        </p>
                    </div>

                    <script>
                        // vue01.js
                        let $vueJS01app = new Vue({
                            el: "#vueJS01App",
                            data: {
                                nom: "",
                                loisirs: ["Bière", "Sieste", "JavaScript"],
                                vueJS01affLoisirs: true
                            }
                        });</script>
                </div>

                <pre><code class = "language-javascript line-numbers">&lt;span&gt;{{ nom == "Dominique" ? "Maitre" : nom.toUpperCase () }}&lt;/span&gt;</code></pre>
                </div>

                <div class = "ui segment">

                    <h4 id = "titleH3VueJS02">
                        <a href = "?#title-h2-table-of-contents"><a href = "?#title-h2-table-of-contents">Vue‑J.S._02</a></a>
                    </h4>

                    <pre><code class = "language-html line-numbers">&lt;!-- // vue02.html --&gt;
&lt;div id = "vue02JSApp"&gt;
	&lt;input type = "text"
		   v-model = "vue02JSNom"/&gt; {{ vue02JSNom }}&lt;br/&gt;

	&lt;input type = "text"
		   v-model = "vue02JSPrenom"/&gt; {{ vue02JSPrenom }}&lt;br/&gt; {{ vue02JSNomComplet()|capitalize }}&lt;br/&gt;

	&lt;div
			v-on:click = "vue02JSSalutDiv"
			style = "height: 60px; width: 100px; background-color: red"&gt;

		&lt;button
				v-on:click.left.stop = "vue02JSalutBouton"
                            <!-- VueJS dans l'html. -->
				v-on:click.right.stop.prevent = "vue02JSAuRevoirBouton"&gt;Saluer
                            <!-- Empêche sur le navigateur accomplisse se’s fonction’s native (menu btn droit). -->
		&lt;/button&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>

                    <ul>
                        <li>
                            <code class = "language-javascript">v-on.click.stop.propagation();<br> // JavaScript dans le JS.</code>
                        </li>
                    </ul>

                    <pre><code class = "language-javascript line-numbers">                            // vue02.js
let $vue02JSApp = new Vue({
	el: "#vue02JSApp",
	data: {
		vue02JSNom: "",
		vue02JSPrenom: ""
	},
	methods: {
		vue02JSSalutBouton() {
			console.log("Hello, je suis le bouton");
		},
		vue02JSAuRevoirBouton() {
			console.log("Au revoir du bouton");
		},
		vue02JSSalutDiv() {
			console.log("Hello, je suis le div");
		},
		vue02JSNomComplet() {
			return this.vue02JSPrenom + " " + this.vue02JSNom;
		}
	}
});</code></pre>

                    <hr>

                    <!-- // vue02.html -->
                    <div id = "vue02JSApp">
                        <input type = "text"
                               v-model = "vue02JSNom"/> {{ vue02JSNom }}<br/>

                        <input type = "text"
                               v-model = "vue02JSPrenom"/> {{ vue02JSPrenom }}<br/> {{ vue02JSNomComplet()|capitalize }}<br/>

                        <div class = "ui segment info message">
                            <p>Utiliser la console pour voir le’s effets de’s clique’s gauche & droit sur le’s box’s</p>
                        </div>

                        <div
                                v-on:click = "vue02JSSalutDiv"
                                style = "height: 60px; width: 100px; background-color: red">

                            <button
                                    v-on:click.left.stop = "vue02JSalutBouton"
                                    v-on:click.right.stop.prevent = "vue02JSAuRevoirBouton">Saluer
                                <!-- Empêche sur le navigateur accomplisse se’s fonction’s native (menu btn droit). -->
                                <!-- VueJS dans l'html. -->
                            </button>
                        </div>
                    </div>

                    <script>
                        // vue02.js
                        let $vue02JSApp = new Vue({
                            el: "#vue02JSApp",
                            data: {
                                vue02JSNom: "",
                                vue02JSPrenom: ""
                            },
                            methods: {
                                vue02JSSalutBouton() {
                                    console.log("Hello, je suis le bouton");
                                },
                                vue02JSAuRevoirBouton() {
                                    console.log("Au revoir du bouton");
                                },
                                vue02JSSalutDiv() {
                                    console.log("Hello, je suis le div");
                                },
                                vue02JSNomComplet() {
                                    return this.vue02JSPrenom + " " + this.vue02JSNom;
                                }
                            }
                        });
                    </script>

                </div>

                <div class = "ui segment">

                    <h4 id = "titleH3VueJS03"><a href = "?#title-h2-table-of-contents">Vue‑J.S._03</a></h4>

                    <pre><code class = "language-html line-numbers">&lt;!-- vue03.html --&gt;
&lt;div id = "vue03JSApp"&gt;

	&lt;p&gt;Heure de début: {{ heureDebut }}&lt;/p&gt;

	&lt;p&gt;Heure actuelle: {{ maintenant }}&lt;/p&gt;

	&lt;button @click = "addLapTime"&gt;LapTime&lt;/button&gt;

	&lt;ul&gt;
		&lt;li v-for = "time in laps"&gt;{{ time }}&lt;/li&gt;
	&lt;/ul&gt;

&lt;/div&gt;

&lt;script src = "vue.js"&gt;&lt;/script&gt;</code></pre>

                    <pre><code class = "language-javascript line-numbers">// vue03.js

let $vue03JSApp = new Vue({
    el: "#vue03JSApp",
    data: {
        heureDebut: tps2str(new Date()),
        maintenant: "",
        laps: []
    },
    methods: {
        miseAJourHeure() {
            console.log("Mise à jour de l'heure");

            this.maintenant = tps2str(new Date());
        },
        addLapTime() {
            this.laps.push(this.maintenant);
        }
    },
    mounted() {
        this.timer = setInterval(this.miseAJourHeure, 100);
    },
    destroyed() {
        clearInterval(this.timer);
    }
});

function tps2str(tps_ms) {
    let $tps = new Date(tps_ms);

    let $heures = $tps
        .getHours()
        .toString()
        .padStart(2, "0");
    let $minutes = $tps
        .getMinutes()
        .toString()
        .padStart(2, "0");
    let $secondes = $tps
        .getSeconds()
        .toString()
        .padStart(2, "0");
    let $millisecondes = $tps
        .getMilliseconds()
        .toString()
        .padStart(3, "0");

    return `${$heures}:${$minutes}:${$secondes}.${$millisecondes}`;
}</code></pre>

                    <hr>

                    <!-- vue03.html -->
                    <div id = "vue03JSApp">

                        <p>Heure de début: {{ heureDebut }}</p>

                        <p>Heure actuelle: {{ maintenant }}</p>

                        <button @click = "addLapTime">LapTime</button>

                        <ul>
                            <li v-for = "time in laps">{{ time }}</li>
                        </ul>

                    </div>

                    <script>// vue03.js

                        let $vue03JSApp = new Vue({
                            el: "#vue03JSApp",
                            data: {
                                heureDebut: tps2str(new Date()),
                                maintenant: "",
                                laps: []
                            },
                            methods: {
                                miseAJourHeure() {
                                    console.log("Mise à jour de l'heure");

                                    this.maintenant = tps2str(new Date());
                                },
                                addLapTime() {
                                    this.laps.push(this.maintenant);
                                }
                            },
                            mounted() {
                                this.timer = setInterval(this.miseAJourHeure, 100);
                            },
                            destroyed() {
                                clearInterval(this.timer);
                            }
                        });

                        function tps2str(tps_ms) {
                            let $tps = new Date(tps_ms);

                            let $heures = $tps
                                .getHours()
                                .toString()
                                .padStart(2, "0");
                            let $minutes = $tps
                                .getMinutes()
                                .toString()
                                .padStart(2, "0");
                            let $secondes = $tps
                                .getSeconds()
                                .toString()
                                .padStart(2, "0");
                            let $millisecondes = $tps
                                .getMilliseconds()
                                .toString()
                                .padStart(3, "0");

                            return `${$heures}:${$minutes}:${$secondes}.${$millisecondes}`;
                        }</script>

                </div>

                <div class = "ui segment">

                    <h4 id = "titleH3VueJS04"><a href = "?#title-h2-table-of-contents">Vue‑J.S._04</a>
                    </h4>

                    <pre><code class = "language-html line-numbers">&lt;!-- vue04.html --&gt;
&lt;div id = "vue04JSApp"&gt;
	&lt;p&gt;{{ temps }}&lt;/p&gt;
	&lt;button @click = "startChrono"
			:disabled = "etat != 'P'"&gt;Start
	&lt;/button&gt;
	&lt;button @click = "stopChrono"
			:disabled = "etat != 'F'"&gt;Stop
	&lt;/button&gt;
	&lt;button @click = "addLapTime"
			:disabled = "etat != 'F'"&gt;LapTime
	&lt;/button&gt;
	&lt;button @click = "resetChrono"
			:disabled = "etat != 'A'"&gt;Reset
	&lt;/button&gt;
	&lt;ul&gt;
		&lt;li v-for = "lap in laps"&gt;{{ lap }}&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;script src = "vue.js"&gt;&lt;/script&gt;</code></pre>

                    <pre><code class = "language-javascript line-numbers">// vue04.js
let vue04JSApp = new Vue({
    el: "#vue04JSApp",
    data: {
        hdep: 0,
        temps: tps2str(0),
        etat: "P", // P = pret, F = en fonction, A = arret
        laps: []
    },
    methods: {
        startChrono() {
            this.etat = "F";
            this.hdep = new Date();
            this.timer = setInterval(this.majTemps, 1);
        },
        stopChrono() {
            this.etat = "A";
            clearInterval(this.timer);
        },
        resetChrono() {
            this.etat = "P";
            this.temps = tps2str(0);
            this.laps = [];
        },
        addLapTime() {
            this.laps.push(this.temps);
        },
        majTemps() {
            this.temps = tps2str(new Date() - this.hdep);
        }
    }
});

function tps2str(tps_ms) {
    let tps = new Date(tps_ms);

    let heures = tps
        .getUTCHours()
        .toString()
        .padStart(2, "0");
    let minutes = tps
        .getMinutes()
        .toString()
        .padStart(2, "0");
    let secondes = tps
        .getSeconds()
        .toString()
        .padStart(2, "0");
    let millisecondes = tps
        .getMilliseconds()
        .toString()
        .padStart(3, "0");

    return `${heures}:${minutes}:${secondes}.${millisecondes}`;
}</code></pre>

                    <p>Dia‑ghramme d'état de transition.</p>

                    <p><code>tps2str :</code> temps to string.</p>

                    <!-- vue04.html -->
                    <div id = "vue04JSApp">
                        <p>{{ temps }}</p>
                        <button @click = "startChrono"
                                :disabled = "etat != 'P'">Start
                        </button>
                        <button @click = "stopChrono"
                                :disabled = "etat != 'F'">Stop
                        </button>
                        <button @click = "addLapTime"
                                :disabled = "etat != 'F'">LapTime
                        </button>
                        <button @click = "resetChrono"
                                :disabled = "etat != 'A'">Reset
                        </button>
                        <ul>
                            <li v-for = "lap in laps">{{ lap }}</li>
                        </ul>
                    </div>

                    <script>// vue04.js
                        let vue04JSApp = new Vue({
                            el: "#vue04JSApp",
                            data: {
                                hdep: 0,
                                temps: tps2str(0),
                                etat: "P", // P = pret, F = en fonction, A = arret
                                laps: []
                            },
                            methods: {
                                startChrono() {
                                    this.etat = "F";
                                    this.hdep = new Date();
                                    this.timer = setInterval(this.majTemps, 1);
                                },
                                stopChrono() {
                                    this.etat = "A";
                                    clearInterval(this.timer);
                                },
                                resetChrono() {
                                    this.etat = "P";
                                    this.temps = tps2str(0);
                                    this.laps = [];
                                },
                                addLapTime() {
                                    this.laps.push(this.temps);
                                },
                                majTemps() {
                                    this.temps = tps2str(new Date() - this.hdep);
                                }
                            }
                        });

                        function tps2str(tps_ms) {
                            let tps = new Date(tps_ms);

                            let heures = tps
                                .getUTCHours()
                                .toString()
                                .padStart(2, "0");
                            let minutes = tps
                                .getMinutes()
                                .toString()
                                .padStart(2, "0");
                            let secondes = tps
                                .getSeconds()
                                .toString()
                                .padStart(2, "0");
                            let millisecondes = tps
                                .getMilliseconds()
                                .toString()
                                .padStart(3, "0");

                            return `${heures}:${minutes}:${secondes}.${millisecondes}`;
                        }</script>

                </div>

            </fieldset>

        </section>
        <!-- END PRINCIPAL CONTENT -->

    </article>
    <!-- END ARTICLE -->

</main>

<footer id = "footer">
    <!-- Prism -->
    <script src = "assets/js/prism/prism.js"></script>

    <!-- Prettify -->
    <script src = "assets/js/prettify/prettify.js"></script>

    <!-- TocBot-->
    <script src = "assets/js/tocbot/tocbot.js"></script>
    <script src = "assets/js/tocbot/tocbot.init.js"></script>

    <!-- BootStrap -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script> -->
    <!-- <script src="../../assets/PrameVorgs/semantic-ui-css-master/semantic.min.js"></script> -->

    <!-- Semantic UI -->
    <script src = "assets/PrameVorgs/semantic-ui-css-master/semantic.min.js"></script>

    <!-- DataTables -->
    <script src = "assets/js/data_tables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

    <script src = "assets/js/data_tables/DataTables-1.10.18/js/dataTables.semanticui.min.js"></script>

    <!-- DataTables Personal -->
    <script>
        /**
         * Created by PhpStorm.
         * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
         * Date: 2019-01-02
         * Time: 10:40
         */

        /*
		// Modification à faiqe dans jquery.dataTables.min.css & jquery.dataTables.css (dépend duquel ty utilise) :

		.dataTables_paginate{float:right;text-align:right;padding-top:0.25em}

		.dataTables_paginate{float:none;text-align:center;padding-top:0}

		// Pour que kë‑lâ fonctionne ajouter :
		/*
		<table id="table" style="text-align: center" class="table-de-gazmen order-column hover stripe cell-border" data-order='[[ 2, "desc" ]]' <!-- data-column-defs='[{ "type": "html-num-fmt", "targets": 5 }]' --> data-page-length="25" data-filter="true" data-info="false" data-paging="true"> > <!-- data-page-length="-1" : pro all results… -->
		*/

    </script>
    <script src = "assets/js/Nemzag/data_tables-nemzag.js"></script>

    <!-- Personnal -->
    <script src = "assets/js/Nemzag/smoothscroll.js"></script>
</footer>

</body>

</html>