//---------------------------------
document.getElementById("btnReq").addEventListener("click", reqAjax_v2);
//---------------------------------

function reqAjax() {
	let num = document.getElementById("txtNum").value;

	fetch("./ex2019_12.php?num=" + num) //création XMLHttpRequest, open, send + renvoi Promise
		.then(function(rep) {
			// onreadystatechange avec readyState === 4
			return rep.json(); //renvoie un Promise
		})
		.then(function(data) {
			let texte = "";
			for (const item in data) {
				texte += item + " : " + data[item] + "<br />";
			}
			document.getElementById("divResult").innerHTML = texte;
		})
		.catch(function() {
			// pas de réponse pour l'url encodée
			alert("ERREUR");
		});
}
function reqAjax_v2() {
	let num = document.getElementById("txtNum").value;

	fetch("./ex2019_12.php?num=" + num) //création XMLHttpRequest, open, send + renvoi Promise
		.then(rep => rep.json())
		.then(data => {
			let texte = "";
			for (const item in data) {
				texte += item + " : " + data[item] + "<br />";
			}
			document.getElementById("divResult").innerHTML = texte;
		})
		.catch(() => {
			alert("ERREUR");
		});
}
//---------------------------------
