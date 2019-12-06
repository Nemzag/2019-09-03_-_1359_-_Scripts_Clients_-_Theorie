"use strict";
//afficher les nombres de 1 à 10
for (let i = 1; i <= 10; i++) {
	console.log("i :", i);
}
console.log("--------------------");

//afficher les nombres de 10 à 1
for (let i = 10; i >= 1; i--) {
	console.log("i :", i);
}
console.log("--------------------");

//creer un tableau tab contenant les nombres 1, 5 et 9
let tab = [1, 5, 9];

//afficher le contenu de tab sur des lignes séparées
for (let i = 0; i < tab.length; i++) {
	console.log(`tab[${i}] :`, tab[i]);
}
console.log("--------------------");

//afficher les éléments de tab >=4
for (let i = 0; i < tab.length; i++) {
	if (tab[i] > 4) {
		console.log(`tab[${i}] :`, tab[i]);
	}
}
console.log("--------------------");

//créer un tableau tab2 reprenant les nombres de 1 à 1000
let tab2 = [];
for (let i = 1; i <= 1000; i++) {
	tab2.push(i);
}
console.log("tab2 :", tab2);

//ecrire une fonction moyenne qui renvoit la moyenne du tableau passé en argument
const moyenne = function(tab) {
	let total = 0;
	for (let i = 0; i < tab.length; i++) {
		total = total + tab[i];
	}
	return total / tab.length;
};
console.log("moyenne(tab) :", moyenne(tab));
console.log("moyenne(tab2) :", moyenne(tab2));
console.log("moyenne([]) :", moyenne([]));
console.log('moyenne([2,4,9,"a"]) :', moyenne([2, 4, 9, "a"]));
