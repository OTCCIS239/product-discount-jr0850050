<?php

    $products = [
        "Pizza",
        "Boneless wings",
        "Chips and dip",
        "Brownies",
        "Gin and Tonic"
    ];
    $discounts = [
      "QT"=>"3.14159265359",
      "Customer appeasement"=>"25",
      "Extreme Couponer"=>"99"
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Product Discount</title>
    <meta name="description" content="Product Discount">
    <meta name="author" content="Joshua Ratliff">

    <!--css -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
  <!-- form block for grabbing description, list price, and discount -->
  <div class="form-style-8">
    <h2>Please enter your information</h2>
      <form action='product.php' method="get">
        <pclass="outset">
          Your item
        </p>
        <select name="description">
          <!-- product foreach block -->
              <?php foreach ($products as $product): ?>
                  <option value="<?= $product ?>"><?= $product ?></option>
              <?php endforeach; ?>
          <!-- end of foreach product block -->
          </select>
          <p class="outset">
            List Price
          </p>
        <input type="number" placeholder="List Price" name="price"/>
        <!-- discount foreach block -->
        <p class="outset">
          Discount percentage
        </p>
        <select name="discount">
          <?php foreach ($discounts as $x => $xvalue): ?>
                <option value="<?= $xvalue ?>"><?= $x . " - ". $xvalue ."%" ?></option>
            <?php endforeach; ?>
        </select>
        <!-- end of discount foreach block -->
        <input type="submit" value="Submit" />
      </form>
  </div>
</body>
</html>
