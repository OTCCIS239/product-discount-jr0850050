<?php

$description = $_GET['description'];
$description = $_GET['price'];
$description = $_GET['discount'];

$discountAmount = $price * ($discount / 100);
$total = $price - $discountAmount;

?>