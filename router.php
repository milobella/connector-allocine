<?php
require_once(__DIR__.'/PHP/allocine.class.php');

define('ALLOCINE_PARTNER_KEY', '100ED1DA33EB');
define('ALLOCINE_SECRET_KEY', '1a1ed8c1bed24d60ae3472eed1da33eb');

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // retourne la requête telle quelle.
} else {
	parse_str($_SERVER['QUERY_STRING'], $output);
    $allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);

    // Hardly define Mouans-Sartoux code
	$result = $allocine->showtimes("P1086");

	echo $result;
}
?>
