<?php

function bake_cookie($name, $value) {
	setcookie($name, $value, time() +60*60*24*5);
}

bake_cookie("monster_library", "680654108796940");
bake_cookie("tracking_monster", "bespe0611080611");
bake_cookie("mahalo", "ungil_tutau");

include("password.php");

$mysql = new mysqli("localhost", "lngira01", $library_password, "lngira01");

$results =$mysql->query('SELECT * FROM library;');




$result = "list";
if(isset($_REQUEST["result"])) {
	$result = $_REQUEST["result"];
}

include("lists.php");
?>



