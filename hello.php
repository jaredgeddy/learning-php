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
	<?php // Script 3.7 - hello.php
	$name = $_GET[ 'name' ];
  print "<p>Hello, <span style=\"font-weight:bold;\">$name</span>!</p>";
	?>
</body>
</html>