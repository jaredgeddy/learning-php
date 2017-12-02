<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Learning PHP</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	<?php
	// Script 2.3 - variables.php
  $street = "2924 59th Ave. NE";
  $city = "Tacoma";
  $state = "WA";
  $zip = 98422;
  $favPie = "Pecan Pie";

  print "<p> The address is:<br />$street <br />$city, $state $zip<br /> My favorite pie is $favPie.</p>";

	?>
</body>
</html>
