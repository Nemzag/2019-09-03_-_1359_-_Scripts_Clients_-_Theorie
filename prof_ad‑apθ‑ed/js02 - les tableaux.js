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
	console.log(i, filles[i]);
}

console.log("------------ boucle for in");
for (const key in filles) {
	console.log(key, filles[key]);
}

console.log("------------ boucle for of");
for (const elem of filles) {
	console.log(elem);
}

//---------------------------------------------------------
console.log("------------ tableaux dynamiques");
filles[5] = "Erika";
console.log(filles);

filles.push("Nadia");
console.log(filles);

//---------------------------------------------------------
console.log("------------ déstructuration");
console.log(...filles);

//---------------------------------------------------------
console.log("------------ assemblage");
let mixtes1 = [filles, garcons]; // ! tableau reprenant 2 tableaux
console.log(mixtes1);

let mixtes2 = [...filles, ...garcons]; // un seul tableau - équivalent de filles.concat(garcons)
console.log(mixtes2);
