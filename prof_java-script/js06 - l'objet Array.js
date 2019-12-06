/*
 * quelques méthodes de l'objet Array (voir la documentation officielle pour plus d'infos)
 *
 ! certaines méthodes modifient le tableau : push, pop, fill, sort, reverse, forEach...
 * d'autres méthodes créent un nouveau tableau : map, concat, filter...
 *
 * les fonctions passées en argument peuvent être des fonctions classiques ou fléchées
 */

const resultats = [7, 12, 15, 4, 19];
console.log("resultats :", resultats);

//---------------------------------------------------------
// * méthodes qui renvoient un nouveau tableau
//---------------------------------------------------------
console.log("-------------- pas de modification du tableau original");

// renvoie un tableau reprenant uniquement les éléments répondant à la condition donnée par la fonction
console.log(
  "resultats.filter( (x) => x >= 10 ) :",
  resultats.filter(x => x >= 10)
);

// renvoie un nouveau tableau dont chque élément correspond à la transformation indiquée dans la fonction
console.log("resultats.map( (a) => a / 2 ) :", resultats.map(a => a / 2));

// renvoie UN résultat qui est l'accumulation de toute les valeurs suivant la fonction passée
// total est l'accumulateur et vaut 0 au départ
// element désigne successivement chacun des éléments du tableau
console.log(
  "resultats.reduce( (total, element) => total += element ) :",
  resultats.reduce((total, element) => (total += element))
);

//---------------------------------------------------------
// ! méthodes qui modifient le tableau original
//---------------------------------------------------------
console.log("-------------- !!! modification du tableau original !!!");

// push : ajoute un élément et retourne la nouvelle taille
let taille = resultats.push(3);
console.log("resultats :", resultats, "taille : ", taille);

// pop : retire un élément et retourne l'élément supprimé
let dernierTest = resultats.pop();
console.log("resultats :", resultats, "dernierTest : ", dernierTest);

// inverse le tableau
resultats.reverse();
console.log("resultats.reverse() :", resultats);

// ! tri par ordre alphabétique
resultats.sort();
console.log("resultats.sort() :", resultats);

// * tri utilisant une fonction de comparaison
// la fonction doit renvoyer : une valeur négative si a < b, 0 si a==b, une valeur positive si a > b
resultats.sort((a, b) => b < a); //si b < a, on trie
console.log("resultats.sort( (a,b) => b > a ) :", resultats);

//---------------------------------------------------------
// * quelques exemples plus avancés
//---------------------------------------------------------
console.log("-------------- quelques exemples");

let suite = Array(10) //crée un tableau de 10 éléments vides
  .fill(0) //remplit le tableau de 0
  .map((val, i) => i + 1); //renvoie un tableau dont chaque élément est remplacé par son indice + 1
console.log("suite :", suite);

let fibo1 = Array(10) //crée un tableau de 10 éléments vides
  .fill(1) //remplit le tableau de 1
  .map((val, i, array) =>
    i < 2 ? val : (array[i] = array[i - 2] + array[i - 1])
  );
console.log("fibo1 :", fibo1);

let fibo2 = [...Array(10)] //crée un tableau de 10 éléments vides, le déstructure et le recompose pour obtenir un tableau de 10 éléments "undefined"
  .reduce((acc, val, i) => acc.concat(i < 2 ? 1 : acc[i - 2] + acc[i - 1]), []);
console.log("fibo2 :", fibo2);

let alea = [...Array(10)].map(x => Math.floor(Math.random() * 11)); //renvoie un tableau dont chaque élément est une valeur entière aléatoire entre 0 et 10
console.log("alea :", alea);

//---------------------------------------------------------
