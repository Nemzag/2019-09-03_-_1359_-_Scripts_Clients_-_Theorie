/*
 * manipulation des objets : copie en surface et en profondeur
 */

const obj1 = { prenom: "John", nom: "Doe", hobbies: ["chasse", "lecture"] };
console.log("obj1:", obj1);
//console.log("obj1 sous forme de chaine :", JSON.stringify(obj1));

//-----------------------------------------------------------------------------
// copie par référence ( alias )
//-----------------------------------------------------------------------------
console.log("-------copie par référence");
const obj2 = obj1; // obj1 et obj2 désignet le même objet
obj2.prenom = "Jane"; // ! les prénoms de obj1 et obj2 sont tous les 2 modifiés
console.log("obj2:", obj2);
console.log("obj1:", obj1);

//-----------------------------------------------------------------------------
// clonage d'un objet en superficie
//-----------------------------------------------------------------------------
console.log("-------clonage superficiel");
const obj3 = Object.assign({}, obj1); // copie de toutes les valeurs de obj1 vers un nouvel objet
obj3.prenom = "Patrick"; // modifé uniquement dans obj3
obj3.hobbies[0] = "pêche"; // ! modifié aussi dans l'array hobbies de obj1
console.log("obj3:", obj3);
console.log("obj1:", obj1);

//-----------------------------------------------------------------------------
// clonage d'un objet en profondeur
//-----------------------------------------------------------------------------
console.log("-------clonage en profondeur");
const obj4 = JSON.parse(JSON.stringify(obj1)); // transformation en string puis retransformation en objet
obj4.prenom = "Steph"; // modifé uniquement dans obj4
obj4.hobbies[0] = "PHP"; // modifié uniquement dans l'array hobbies de obj4
console.log("obj4:", obj4);
console.log("obj1:", obj1);

//-----------------------------------------------------------------------------
// protection de l'objet
//-----------------------------------------------------------------------------
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
console.log("obj13(freeze):", obj13);
