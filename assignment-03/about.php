<!doctype html>
<html>
<style>
* {
	margin:0;
	padding:0;
}

body {
	width:100%;
	margin:10px auto;
}

p {
	padding:20px 10px;
}

a {
		text-decoration:none;
		color:black;
		font-size:1.2em;
		margin:10px 20px;
}

#joe {
	font-size:1.5em;
}

footer {
 color:#5EC1FF;
}
</style>
<body>
	<p id="joe">Here are a few things that one should know about <i>Palau</i></p>
	<a href = "?page=list">Facts</a>
	<a href = "?page1=attract">Tourist Attractions</a>
	
	<ul>
	<?php
		foreach ($palau as $pal) {
			if($page == "list") {
				include("list.php");
			}
		};
		foreach ($palauT as $palT) {
			if($page1 == "attract") {
				include("places.php");
			}
		};
	?>
	</ul>
	
	<footer><p><i>Ngiramolau, Lia &copy;2014</i></p></footer>
</body>
</html>