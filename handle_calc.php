<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Product Cost Calculator</title>
  <meta name="description" content="Sales Calculator">
  <meta name="author" content="Sites Realized">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style>
    .number { font-weight:700; }
  </style>

</head>

<body>

  <!-- html goes here -->

	<?php  // Script 4.2 - handle_calc.php

    // Turn on Display Errors
    ini_set ('display_errors', 1);

    // Grabbing the variables from POST method - This is the name of the field
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $tax = $_POST['tax'];
    $shipping = $_POST['shipping'];
    $payments = $_POST['payments'];

    // Calculating Total Cost
    $total = $price * $quantity;
    $total = $total + $shipping;
    $total = $total - $discount;

    // Calculating Tax Rate
    $taxrate = $tax/100;
    $taxrate = $taxrate + 1;
    $total = $total * $taxrate;

    // Calculating Monthly Payment
    $monthly = $total / $payments;

    // Print the results for the user
    print "<p>You have selected to purchase: <br />
      <span class=\"number\">$quantity</span> widget(s) at <br />
      $<span class=\"number\">$price</span> price each plus a <br />
      $<span class=\"number\">$shipping</span> shipping cost and a <br />
      <span class=\"number\">$tax</span> percent tax rate. <br />
      After your $<span class=\"number\">$discount<span> discount, the total cost is $<span class=\"number\">$total</span>. <br/>
      Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";

	?>

</body>
</html>
