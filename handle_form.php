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
	<?php // Script 3.3 handle_form.php
  // This page recieves the data from feedback.html.
  // It will recieve: title, name, email, response, comments, and submit in $_POST.

  // Show all possible problems!
  error_reporting( E_ALL | E_STRICT);

  // Assigning variables
  $title = $_POST['title'];
  $name = $_POST['name'];
	$response = $_POST['response'];
  $comments = $_POST['comments'];
  
  // Print out the user input values
  print "<h2>Thank you, $title $name, for your comments. </h2>
  <p>You stated that you found this example to be '$response' and added: <br />
  $comments</p>";

	?>
</body>
</html>