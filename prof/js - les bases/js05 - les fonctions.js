/*
 * les fonctions
 */

// fonctions avec et sans retour de valeur

function saluer() {
  console.log("hello !");
}
saluer(); // appel de la fonction

function somme(nb1, nb2) {
  let total = nb1 + nb2; // ! total est une variable globale
  return total;
}
console.log("somme(10,6) :", somme(10, 6));

//---------------------------------------------------------

// différentes façons d'écrire les fonctions

// fonction classique
function parler() {
  console.log("je parle !");
}
parler();

// fonction anonyme stockée dans une variable
let crier = function() {
  console.log("je crie !");
};
crier();

// fonctions flechées
let hurler = () => {
  console.log("je hurle !");
};
hurler();

let doubleDe = nbre => {
  return nbre * 2;
};
console.log("doubleDe(6) :", doubleDe(6));

let tripleDe = nbre => nbre * 3; // possible lorsque la fonction est uniquement composée d'un return
console.log("tripleDe(6) :", tripleDe(6));

//---------------------------------------------------------

// paramètres

function presentation(prenom, nom = "Martin") {
  // ! le ou les paramètres facultatifs doivent toujours être les derniers
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

//---------------------------------------------------------
