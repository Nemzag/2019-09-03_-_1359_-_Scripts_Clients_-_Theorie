//---------------------------------
let $divUsers = document.getElementById("divUsers");
let $txtFiltreNom = document.getElementById("txtFiltreNom");
//---------------------------------
$txtFiltreNom.addEventListener("keyup", maj_users);
//---------------------------------
function maj_users() {
	$divUsers.innerHTML = "";
	fetch("https://jsonplaceholder.typicode.com/users")
		.then($rep => $rep.json())
.then($data => {
		$data.sort(($a, $b) => $a.name.localeCompare($b.name));
	try {
		let $filtre = new RegExp($txtFiltreNom.value);
		for (const USER of $data) {
			if ($filtre.test(USER.name)) {
				let $pUser = document.createElement("p");
				let $texte = document.createTextNode(
					`nom: ${USER.name} ville: ${USER.address.city}`
				);
				$pUser.appendChild($texte);
				$divUsers.appendChild($pUser);
			}
		}
	} catch (e) {
		console.log("e :", e);
	}
});
}
//---------------------------------