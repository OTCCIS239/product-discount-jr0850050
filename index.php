<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Product Discount</title>
    <meta name="description" content="Product Discount">
    <meta name="author" content="Joshua Ratliff">

    <!-- bootstrap css -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">

</head>
<script>
  function adjust_textarea(h) {
      h.style.height = "20px";
      h.style.height = (h.scrollHeight)+"px";
  }
</script>
<body>
    <!-- form block for grabbing description, list price, and discount -->
    <div class="form-style-8" id="form">
      <h2>Please enter your information</h2>
        <form>
          <input type="text" name="field1" placeholder="Product Description" />
          <input type="number" name="field2" placeholder="List Price" />
          <input type="number" name="field3" placeholder="Discount" />
          <textarea placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>
          <input type="button" value="Submit" />
        </form>
    </div>
</body>
</html>
