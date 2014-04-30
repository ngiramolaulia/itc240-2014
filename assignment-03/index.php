<?php
	echo "<h1>Asignment03</h1>";
	echo "<h2>Arrays and Loops</h2>";
	
	$palau = [
		["fact" => "It is an island country located in the western Pacific Ocean."],
		["fact" => "It is one of the seven wonders of the world."],
		["fact" => "It is home to approximately 20,000+ people; it is as tiny as a dot on a map."]
		];
		
	$palauT = [
		["places" => "Jellyfish Lakes", "where" => "Ngedebuu", "when" =>"1984" ],
		["places" => "Milky Way", "where" => "Ngchus", "when" => "1934"],
		["places" => "Dolphin Pacific", "where" => "Ngermeaus", "when" => "2003"]
	];
		
	$page = "list";
	if(isset($_REQUEST["page"])) {
		$show = $_REQUEST["page"];
	}
	
	$page1 = "attract";
	if(isset($_REQUEST["page1"])) {
		$show = $_REQUEST["page1"];
	}
		
	
	include("about.php");