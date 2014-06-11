<?php
//clean up outputs
function output($result) {
	$outcome = htmlentities($result);
	return $outcome;
} 

//connect to database and get table content
$mysql = new mysqli ("localhost", "lngira01", $mysqlPassword, "lngira01");
function showText() {
	global $mysql;
	$prepared = $mysql->prepare('SELECT * FROM content;');
	$prepared->execute();
	
	return $prepared->get_result();
}

//connect to database and get table dolphin_facts
$dolphinsql = new mysqli ("localhost", "lngira01", $mysqlPassword, "lngira01");
function showDolphins() {
	global $dolphinsql;
	$prepared = $dolphinsql->prepare('SELECT * FROM dolphin_facts;');
	$prepared->execute();
	
	return $prepared->get_result();
}

function showFacts($listFacts) {
	$dolphink7e = $listFacts . 'is an average approximation of different type of dolphin species';
	
	return $dolphink7e;
}


