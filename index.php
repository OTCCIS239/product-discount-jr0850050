<?php

    $products = [
        "Screwdriver",
        "Clapton Coil",
        "WD Red 2TB HDD 7200rpm (x4)",
        "16GB 4x4 DDR4 RAM"
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
          <!-- <input type="text" name="field1" placeholder="Product Description" name="description"> -->
          <select name="description">
                <?php foreach ($products as $product): ?>
                    <option value="<?= $product ?>"><?= $product ?></option>
                <?php endforeach; ?>
            </select>
          <input type="number" placeholder="List Price" name="price"/>
          <input type="number" placeholder="Discount" name="discount"/>
          <input type="submit" value="Submit" />
        </form>
    </div>
</body>
</html>
