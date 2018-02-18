<?php

require_once('./db.php');

// $dsn = "mysql:host=localhost;dbname=discounter";
// $password = null;
// $username = 'root';
// $conn = new PDO($dsn, $username, $password);
//
// //products query
// $query = "SELECT * FROM products WHERE in_stock > 0";
// $statement = $conn->prepare($query);
// //bind vars
// $statement->execute();
// //asign results to $products
// $products = $statement->fetchAll();
// //tell sql that were done with the results
// $statement->closeCursor();

// $products = [
//     "Pizza",
//     "Boneless wings",
//     "Chips and dip",
//     "Brownies",
//     "Gin and Tonic"
// ];
//
// $discounts = [
//   "QT"=>"3.14159265359",
//   "Customer appeasement"=>"25",
//   "Extreme Couponer"=>"99"
// ];

// $query = "SELECT * FROM coupons WHERE deleted_at IS NULL";
// $statement = $conn->prepare($query);
// $statement->execute();
// $coupons = $statement->fetchAll();
// $statement->closeCursor();

  $products = getMany("SELECT * FROM products WHERE in_stock > 0", [], $conn);
  $coupons = getMany("SELECT * FROM coupons WHERE deleted_at IS NULL", [], $conn);
  ?>


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
  <!-- form block for grabbing description, list price, and discount -->
  <div class="form-style-8">
    <h2>Please enter your information</h2>
          <!-- product foreach block -->
            <label for="product_id" class="outset">Product</label>
            <select name="product_id" id="product_id" class="form-control">
                <?php foreach($products as $product): ?>
                    <option value="<?= $product['id'] ?>"><?= $product['name'] ?> - $<?= $product['price'] ?></option>
                <?php endforeach; ?>
            </select>
          <!-- discount foreach block -->
            <label class="outset" for="coupon_id">Discount</label>
            <select name="coupon_id" id="coupon_id" class="form-control">
                <?php foreach($coupons as $coupon): ?>
                    <option value="<?= $coupon['id'] ?>"><?= $coupon['code'] ?> - <?= $coupon['discount_percent'] ?>% Off</option>
                <?php endforeach; ?>
              </select>
          <input type="submit" value="Submit" />
      </form>
  </div>
</body>
</html>
