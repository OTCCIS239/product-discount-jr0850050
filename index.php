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

    <body>
    <div class="form-style-8">
      <h2 class="card-header">Please select your product</h2>
        <form action="<?= array_key_exists('debug', $_GET) ? 'debug.php' : 'product.php' ?>">
            <div class="form-group">
                <label for="product_id">Product</label>
                <select name="product_id" id="product_id" class="form-control">
                    <?php foreach($products as $product): ?>
                        <option value="<?= $product['id'] ?>"><?= $product['name'] ?> - $<?= $product['price'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="coupon_id">Discount</label>
                <select name="coupon_id" id="coupon_id" class="form-control">
                    <?php foreach($coupons as $coupon): ?>
                        <option value="<?= $coupon['id'] ?>"><?= $coupon['code'] ?> - <?= $coupon['discount_percent'] ?>% Off</option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
        </form>
      </div>
    </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
