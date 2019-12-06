"use strict";
//-------------------------------------
// outils
//-------------------------------------

const parler = function() {
	window.alert("blabla...");
};

//-------------------------------------
// code appelé automatiquement
//-------------------------------------

document.getElementById("btnSaluer").addEventListener("click", function() {
	window.alert("Bonjour");
});
document.getElementById("btnParler").addEventListener("click", parler);
document.getElementById("btnPartir").addEventListener("click", () => {
	window.alert("Au revoir");
});
