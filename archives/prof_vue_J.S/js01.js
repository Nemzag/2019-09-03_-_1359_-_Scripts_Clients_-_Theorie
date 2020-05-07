const $txtNom = document.getElementById("txtNom");
const $spanNom = document.getElementById("spanNom");

$txtNom.addEventListener("keyup", majSpanNom);

function majSpanNom() {
	$spanNom.innerHTML = $txtNom.value;
}
