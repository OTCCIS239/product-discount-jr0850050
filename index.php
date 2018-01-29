<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Product Discount</title>
    <meta name="description" content="Product Discount">
    <meta name="author" content="Joshua Ratliff">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- form block for grabbing description, list price, and discount -->
    <div class='container' style="height:100vh;">
        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <form>
                    <div class="form-group">
                        <label for="formGroupDescription">Description</label>
                        <input type="text" class="form-control" id="formGroupDescription" placeholder="Your awesome product">
                    </div>
                    <div class="form-group">
                        <label for="formGroupListPrice">List Price</label>
                        <input type="text" class="form-control" id="formGroupListPrice" placeholder="the dollar amount for your product">
                    </div>
                    <div class="form-group">
                        <label for="formGroupPercentage">Discount Percentage</label>
                        <input type="text" class="form-control" id="formGroupPercentage" placeholder="percent amount discount">
                        </div>
                </form>
            </div>
        </div>
    <div>
</body>