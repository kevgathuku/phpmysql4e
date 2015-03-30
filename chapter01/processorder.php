<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title> Bob's Auto Parts - Order Results </title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

</head>

<body>

  <!-- .container is main centered wrapper -->
  <div class="container">

  <h1>Bob's Auto Parts</h1>
  <h2>Order Results</h2>

  <?php

    // create short variable names to capture data sent via POST
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];

    // Sets the default timezone used by all date/time functions in a script
    // date_default_timezone_set('Africa/Nairobi');

    // Outputs the following text verbatim to the browser
    echo "<p>Order processed at ";
    echo date('H:i, jS F Y');
    echo "</p>";

    // Remember to check if the values provided are sane
    echo '<p>Your order is as follows: </p>';

    // The dot is the PHP string concatenation operator
    echo $tireqty.' tires<br />';

    // Double quoted strings can also perform string interpolation
    echo "$oilqty bottles of oil<br />";

    echo "$sparkqty spark plugs<br />";

  ?>

  </div>

</body>
</html>
