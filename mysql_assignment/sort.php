<!doctype html>
<html>
<body>
<!--<h1>My "ONE DAY" bucket list</h1>-->
	<li><a href="?make=ben">Cities</a></li>
	<li><a href="?make=joe">Population</a></li>
	<li><a href="?make=tom">Places</a></li>

<?php
foreach ($output as $mj) {
	if ($make == "ben") {
	
	$mj = $buckets->query('SELECT cities FROM bucket WHERE id > 10 ORDER BY DESC;');
	//include ("sort_a.php");
	}	
}
?>
</body>
</html>