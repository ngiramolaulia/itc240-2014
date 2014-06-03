<?php

include("password.php");

$mysql = new mysqli("localhost", "lngira01", $library_password, "lngira01");
//$book_title =$mysql->query('SELECT * FROM library ORDER BY title ASC;');
//$sort = "sort_books";
if(isset($_POST['sort']) && $_POST['sort'] == "ascending") {
	//$sort = $_REQUEST["sort"];
	$book_title =$mysql->query('SELECT * FROM library ORDER BY title ASC;');
}
?>

<!doctype html>
<head>
<title>Cookie Monster</title>
</head>
<html>
<body>
<br>
	<h1>Cookie Monsters Library</h1>
	<a href="?result=front">Covers-Series</a>
	<a href="?result=list">List-Series</a>
	<!--<a href="?sort=title">Sort Title</a>-->
	
	<select name="sort">
	<option name="ascending">Sort</option>
	</select> <button value="submit">Submit</button>

<?php
foreach($results as $books) {
	if($result=="front") {
		include("cover.php");
	} else {
		include("listing.php");
	}
}

//foreach($book_title as $book_sort) {
	//if($sort=="title") {
		//include("title_page.php");
	//} //else {
		//"";
	//}
	
//}
?>
	


</body>
</html>