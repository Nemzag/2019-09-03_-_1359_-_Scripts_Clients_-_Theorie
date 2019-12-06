/*
 * gestion des évènements dans une page html
 * (voir la documentation officielle pour plus d'infos)
 */

//---------------------------------------------------------
// * association d'un évènement à un objet du DOM
//---------------------------------------------------------

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

//---------------------------------------------------------
// * désassociation d'un évènement à un objet du DOM
//---------------------------------------------------------
document.getElementById("btnSaluer").removeEventListener("click", saluer);

// ! impossible de désassocier "btnManger" car on utilise une fonction anonyme

//---------------------------------------------------------
// * propagation des évènements
//---------------------------------------------------------

// * bubbling (de l'intérieur vers l'extérieur)
// --------------------------------------------
// soit un bouton 'btn1' dans un div 'div1'
document.getElementById("btn1").addEventListener("click", function() {
	console.log("click sur le <button>");
});
document.getElementById("div1").addEventListener("click", function() {
	console.log("click dans le <div>");
});
// click sur le bouton :
// => "click sur le <button>"
// => "click dans le <div>"

// * capturing (de l'extérieur vers l'intérieur)
// ---------------------------------------------
// soit un bouton 'btn2' dans un div 'div2'
document.getElementById("btn2").addEventListener(
	"click",
	function() {
		console.log("click sur le <button>");
	},
	true // useCapture
);
document.getElementById("div2").addEventListener(
	"click",
	function() {
		console.log("Le repas est bon ! (click dans <div>");
	},
	true // useCapture
);
// click sur le bouton :
// => "click dans le <div>"
// => "click sur le <button>"

// * stopper la propagation des évènements
// ---------------------------------------
// soit un bouton 'btn3' dans un div 'div3'
document.getElementById("btn3").addEventListener("click", function(evt) {
	evt.stopPropagation();
	console.log("click sur le <button>");
});
document.getElementById("div3").addEventListener("click", function() {
	console.log("click sur le <button>");
});
// click sur le bouton :
// => "click sur le <button>"
// ! la propagation du click est stoppée

// * empecher le comportement normal d'un élément
// ----------------------------------------------
// soit un checkbox 'chkValid'
document.getElementById("chkValid").addEventListener("click", function(evt) {
	evt.preventDefault();
	console.log("impossible de cocher ou décocher la case");
});
// click sur le checkbox :
// => affichage du message
// ! le bouton ne se (dé)coche pas

//---------------------------------------------------------
