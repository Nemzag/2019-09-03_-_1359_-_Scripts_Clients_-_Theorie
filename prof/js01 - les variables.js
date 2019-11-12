/* 2019‑09‑10 */

/*
 * attention à la portée des variables
 * toujours déclarer les variables avec let ou const
 * ajouter "use strict"; en début de fichier
 */

function initVar() {
  a1 = 11; // ! déclaration GLOBALE !!!
  var b1 = 21; // déclaration locale
  let c1 = 31; // déclaration locale
}

initVar();
console.log("a1 :", a1);
// console.log("b1 :", b1);  // ! erreur car b1 n'est valide que dans initVar()
// console.log("c1 :", c1);  // ! erreur car c1 n'est valide que dans initVar()

//---------------------------------------------------------

if (1) {
  a2 = 12; // ! déclaration GLOBALE !!!
  var b2 = 22; // déclaration GLOBALE !!!
  let c2 = 32; // déclaration locale
}

console.log("a2 :", a2);
console.log("b2 :", b2);
// console.log("c2 :", c2);  // ! erreur car c2 n'est valide que dans initVar()

//---------------------------------------------------------

const PI = 3.14;
//PI = 3.1416;   // ! erreur car PI est une valeur constante

const tab = [1, 2, 3];
tab[0] = 11; // ok car on modifie le contenu de tab sans recréer le tableau
tab.push(4); // ok car on modifie le contenu de tab sans recréer le tableau
console.log("tab :", tab);

// tab = [3, 2, 1];  // ! erreur car l'adresse de tab est constante
// tab = tab.concat([6, 7, 8]);  // ! erreur car l'adresse de tab est constante
