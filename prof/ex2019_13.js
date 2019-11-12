//---------------------------------
document.getElementById("btnMajUsers").addEventListener("click", maj_users);
//---------------------------------

function maj_users() {
	let $divUsers = document.getElementById("divUsers");

	fetch("https://jsonplaceholder.typicode.com/users")
		.then(rep => rep.json())
		.then(data => {
			//console.log("data :", data);
			for (const user of data) {
				//console.log("user.address.city :", user.address.city);
				let $pUser = document.createElement("p");
				let $texte = document.createTextNode(user.name);
				$pUser.appendChild($texte);
				$divUsers.appendChild($pUser);
			}
		});
}

function maj_users2() {
	let $divUsers = document.getElementById("divUsers");

	fetch("https://jsonplaceholder.typicode.com/users")
		.then(rep => rep.json())
		.then(data => {
			let texte = "";
			let num = 0;
			for (const user of data) {
				num++;
				let texte =
					"" +
					num +
					". " +
					user.name +
					" (" +
					user.username +
					") [" +
					user.address.city +
					"]";
				let $pUser = document.createElement("p");
				$pUser.append(texte);
				$divUsers.appendChild($pUser);
			}
		})
		.catch(() => {
			alert("ERREUR");
		});
}
//---------------------------------
