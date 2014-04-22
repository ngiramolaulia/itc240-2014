<!doctype html>
<html>
<title>Mad Libs</title>
<style>
form input{
margin:10px 10px;
}
</style>
<?php
$method = $_SERVER['REQUEST_METHOD'];
echo $method;

if ($method == "GET") {
?>
<body>
	<h1>What's your story?</h1>
	<form method=post>
		<input  name="_noun"placeholder="noun">
		<input name="_verb" placeholder="verb"><br/>
		<input  name="_adjective"placeholder="adjective">
		<input  name="_number"placeholder="random number">
		<!--<input type="checkbox" value="awesome" name="is_awesome">-->
			<!--<label for="is_awesome" value='awesome'>Are you awesome?</label>--><br/>
			<button>Go!</button>
	</form>
<?php
} else {
?>
	<pre>
		<?php print_r ($_REQUEST);?>
	</pre>
	It was my 21st birthday, and my friends wanted to celebrate with me in <?= $_REQUEST['_noun'] ?>. The flight was not as long as I expected to be. We get into our apartment, and this <?= $_REQUEST['_adjective']?> hippopotamus is <?= $_REQUEST['_verb']?> in our pool......naked! It was the beginning of an amazing weekend in <?= $_REQUEST['_noun'] ?>.
	
<?php
	$numb = $_REQUEST['_number'];
	
	if ($numb >= 10) {
?>
	We get to the club that night and drank <?= $numb ?> or more drinks, got shit-face drunk and then black is all I remember.
<?php
} else {
?>
	But then I had the flu and had to <?= $_REQUEST['_verb']?> back home.
<?php
}
?>
	<a href="index.php">GET</a>
<?php
}
?>
</body>
</html>