<style>
h1, td {
	padding:10px 20px;
}

h1 {
	color:#006BBF;
}

li {
	list-style-type:none;
	display:inline;
	font-size:1.5em;
	padding:10px 20px;
}

li a {
	text-decoration:none;
	color:skyblue;
}

li a:hover {
	color:#152D40;
}
</style>
<?php
$make = "ben";
//include my password without showing it
include ("password.php");


//connects to database
$buckets = new mysqli("localhost", "lngira01", $buckets_password, "lngira01");

$outcome = $buckets->query('SELECT * FROM bucket ORDER BY cities ASC;');
?>

<table>
<?php
foreach ($outcome as $output) {
?>	
	<tr>
		<td><?= $output["cities"]?>
		<td><?= $output["population"]?>
		<td><?= $output["places"]?>
<?php
}
?>

</table>
<?php
include ("sort.php");
?>