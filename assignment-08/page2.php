<?php
include("password.php");
include("functions.php");

$title = showText();
foreach ($title as $titleHeading) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Functions in PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>
<!--Beginning of Header-->
<div id="main-header">
    	<h1>Home is where the heart is</h1>
		<h2><?=output($titleHeading["header"]);?>
<?php
}
?>
</div>
<!--end of header-->

<!--Beginning of navigation-->
<nav id="main-nav">
	<ul>
    	<li><a href="index.php">Rock Islands</a> </li>     
        <li><a href="page2.php">Milky Way</a></li>
        <li><a href="#">Clam City</a></li>
        <li><a href="#">The Cemetery</a></li>
        <li><a href="page5.php">Dolphin Functions</a></li>
    </ul>
</nav> 
<!--end of navigation-->
<div id="middle">
    <div id="1of2">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla faucibus enim quis placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ultrices nisi eu velit congue ornare. Integer gravida dictum tincidunt. Nam bibendum, mauris sit amet lacinia tincidunt, orci nisi dictum quam, sit amet fermentum turpis nulla a mi. Proin ac mollis risus, ac imperdiet diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel metus justo. Cras sit amet leo at sapien cursus interdum. Donec at sapien eget tellus molestie rhoncus quis non leo. Praesent tempus orci lacinia luctus feugiat. Aliquam lobortis, turpis vel porta semper, nibh lorem cursus nibh, sed vulputate lacus augue eu lacus. </p>
	  	<img id="firstImg" src="images/image-01.jpg" width="45%"/>
		<img src="images/image-04.jpg" width="45%"/><br/>
    </div>
    
       <div id="2of2">
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla faucibus enim quis placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ultrices nisi eu velit congue ornare. Integer gravida dictum tincidunt. Nam bibendum, mauris sit amet lacinia tincidunt, orci nisi dictum quam, sit amet fermentum turpis nulla a mi. Proin ac mollis risus, ac imperdiet diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel metus justo. Cras sit amet leo at sapien cursus interdum. Donec at sapien eget tellus molestie rhoncus quis non leo. Praesent tempus orci lacinia luctus feugiat. Aliquam lobortis, turpis vel porta semper, nibh lorem cursus nibh, sed vulputate lacus augue eu lacus. </p><br/>
        
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla faucibus enim quis placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ultrices nisi eu velit congue ornare. Integer gravida dictum tincidunt. Nam bibendum, mauris sit amet lacinia tincidunt, orci nisi dictum quam, sit amet fermentum turpis nulla a mi. Proin ac mollis risus, ac imperdiet diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel metus justo. Cras sit amet leo at sapien cursus interdum. Donec at sapien eget tellus molestie rhoncus quis non leo. Praesent tempus orci lacinia luctus feugiat. Aliquam lobortis, turpis vel porta semper, nibh lorem cursus nibh, sed vulputate lacus augue eu lacus. </p>
    </div>
</div>
<!--end of middle-->

<!--Beginning of Footer-->
<footer id="main-footer">
<p><i>Ngiramolau, Lia &copy;2014</i></p>
<p>Koror, Palau 96940</p>
</footer>
<!--end of footer-->

</body>
</html>
