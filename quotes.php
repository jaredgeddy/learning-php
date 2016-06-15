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
	// Script 2.4 quotes.php
  $first_name = 'Jared';
  $last_name = "Eddy";
  $fbook = "https://www.facebook.com";
	
  $name1 = '$first_name $last_name'; // literally equal to Jared Eddy, no extrapolation occurs.
  $name2 = "$first_name $last_name"; // equal to Jared Eddy, presumably the intended result

  print "<h1>Double Quotes</h1><p><a href=\"$fbook\">name1</a> is $name1</br> name2 is $name2</p>";
  print '<h1>Single Quotes</h1><p>name1 is $name1 <br /> name2 is $name2</p>';

  ?>
</body>
</html>