/*
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
console.log("Object.values(jsonPers):", Object.values(jsonPers));
