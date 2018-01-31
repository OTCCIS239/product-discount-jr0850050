<?php

$description = $_GET['description'];
$price = $_GET['price'];
$discount = $_GET['discount'];

$discountAmount = $price * ($discount / 100);
$total = $price - $discountAmount;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--css -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">

    <title>Product Discount Calculator</title>
  </head>
  <body>
    <div class="form-style-8" id="form">
      <h2>Your discount</h2>

      Your item:  <?php echo $description; ?><br>
      The item's price:  <?php echo $price; ?><br>
      The item's discount percentage:  <?php echo $discount; ?><br>
      The item's discount amount:  <?php echo $discountAmount; ?><br>
      The item's new total:  <?php echo $total; ?><br>

    </div>
  </body>
</html>
