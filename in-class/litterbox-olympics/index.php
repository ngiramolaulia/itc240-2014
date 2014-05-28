<!doctype html>
<head>
<title>Neko's Calorie Count</title>
<style>
a {
padding:10px;
}
</style>
</head>
<html>
<body>
<!--<a href="?sort=activity"> Activity </a><a href="?sort=calories_burn">Calories Burned</a>-->
</body>
<html>
<?php

include ("password.php");

$mysql = new mysqli("localhost", "lngira01", $litterbox_password , "lngira01");

$output = 'SELECT activity, calories_burn, calories_burn_on FROM cat_fitness;';
$prepared = $mysql->prepare($output);

$prepared->execute();
$giveMe = $prepared->get_result();

foreach($giveMe as $lists) {
?>
<table>
<tr>
<td><b><?=htmlentities($lists["activity"])?></b></td>

<td><?=htmlentities($lists["calories_burn"]) ?></td>

<td><?=htmlentities($lists["calories_burn_on"]) ?></td>
</tr>
</table>
<?php
}

$sumCalories = $mysql->prepare('SELECT SUM(calories_burn) as calories FROM cat_fitness;');
$sumCalories->execute();

$giveMeSum = $sumCalories->get_result();
$giveMeResult = $giveMeSum->fetch_array();


$maxCalories = $mysql->prepare('SELECT MAX(calories_burn) as highest_fat_burn FROM cat_fitness;');
$maxCalories->execute();

$giveMeMax = $maxCalories->get_result();
$giveMeMaxResult = $giveMeMax->fetch_array();
?>

<div><br>
Nekos total calorie burn is:
<?=htmlentities($giveMeResult["calories"])?><br>

Nekos highest calorie burn is:
<?=htmlentities($giveMeMaxResult["highest_fat_burn"])?>
</div>

<!doctype html>
<head>
<style>
a {
padding:10px;
}
</style>
</head>
<html>
<body>
	<h1>Neko's exercise for today:</h1>
	<form method="POST" action="edit.php">
		<input placeholder="activity" name="activity">
		<input placeholder="calories burned" name="calories_burn">
		<input type="submit">
	</form>