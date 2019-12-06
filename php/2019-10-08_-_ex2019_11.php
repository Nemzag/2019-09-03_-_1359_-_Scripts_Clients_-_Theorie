<?php
$num = $_GET["num"];

if ($num == 1) {

	echo '{
		"nom":"Dubois",
		"prenom":"Louis",
		"age":"25"
	}';

} else if ($num == 2) {

	echo '{
		"nom":"Leroy",
		"prenom":"Albert",
		"couleur":"or"
	}';

} else if ($num == 3) {

	echo '{"nom":"Legrand",
		"prenom":"Alexandre"
	}';

} else if ($num > 3) {

	echo '{"nom":"Doe",
		"prenom":"John"
	}';

} else if ($num == null) {

	echo '';

} else {

	echo '{}';
}
?>