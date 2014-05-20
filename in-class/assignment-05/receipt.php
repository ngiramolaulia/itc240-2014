<?php
include("form.php");
?>

<?php 

include ("password.php");

$receipt = new mysqli ("localhost", "lngira01", $mysql_password, "lngira01");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$query = 'INSERT INTO receipt (total_cost, spent_where, date_spent, spent_on) VALUES (?, ?, NOW(), ?);';
	$prepared = $receipt->prepare($query);
	$prepared->bind_param("sss", $_REQUEST["total_cost"], $_REQUEST["spent_where"], $_REQUEST["spent_on"]);
	$prepared->execute();
}

?>
<?php
include("password.php");

$receipt = new mysqli("localhost", "lngira01", $mysql_password, "lngira01");

?>
<?php
include("receipt-link.php");
?>

