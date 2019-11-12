//---------------------------------
document.getElementById("btnReq").addEventListener("click", reqAjax);
//---------------------------------

function reqAjax() {
	let num = document.getElementById("txtNum").value;

	let req = new XMLHttpRequest();
	req.open("GET", "./ex2019_11.php?num=" + num, true);
	req.addEventListener("readystatechange", function() {
		if (req.readyState === 4 && req.status === 200) {
			//console.log(JSON.parse(req.responseText));
			let reponse = JSON.parse(req.responseText);
			let texte = "";
			for (const item in reponse) {
				texte += item + " : " + reponse[item] + "<br />";
			}
			document.getElementById("divResult").innerHTML = texte;
		}
	});
	req.send(null);
}
//---------------------------------
