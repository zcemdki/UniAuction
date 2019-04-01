<?php
include 'BACKEND/includes_new_item.php';
include 'BACKEND/includes_upload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sell an item</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="CSS/navbar_styles.css">
    <link rel="stylesheet" href="CSS/my_account_styles.css">
    <!-- JS for dropdowns-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" defer></script>

</head>
<body>
<?php include_once ('navbar_loggedin.php')?>
<div class="wrapper panel panel-default col-sm-offset-4 col-sm-4 CW-profile-panel">
    <h2>Sell an item</h2>
    <p>Please complete all fields.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group <?php echo (!empty($item_name_err)) ? 'has-error' : ''; ?>">
            <label>Item Name</label>
            <input type="text" name="item_name" class="form-control" value="<?php echo $item_name; ?>">
            <span class="help-block"><?php echo $item_name_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
            <label>Pick a Category</label>
            <select name="category" class="form-control">
                <option value="" selected="selected">Select a Category</option>
                <option value="Electronics, Books & Computers">Electronics, Books & Computers</option>
                <option value="Clothes, Shoes & Watches">Clothes, Shoes & Watches</option>
                <option value="Food & Grocery">Food & Grocery</option>
                <option value="Health & Beauty">Health & Beauty</option>
                <option value="Home & Kitchenware">Home & Kitchenware</option>
            </select>
            <span class="help-block"><?php echo $category_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
            <label>Price (£)</label>
            <input type="number" name="price" class="form-control" value="<?php echo $price; ?>">
            <span class="help-block"><?php echo $price_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($color_err)) ? 'has-error' : ''; ?>">
            <label>Color</label>
            <input type="color" name="color" class="form-control" value="<?php echo $color; ?>">
            <span class="help-block"><?php echo $color_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
            <span class="help-block"><?php echo $description_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($item_condition_err)) ? 'has-error' : ''; ?>">
            <label>Condition</label>
            <select name="item_condition" class="form-control">
                <option value="" selected="selected">Choose a Condition</option>
                <option value="New">New</option>
                <option value="Like New">Like New</option>
                <option value="Very Good">Very Good</option>
                <option value="Good">Good</option>
                <option value="Acceptable">Acceptable</option>
            </select>
            <span class="help-block"><?php echo $item_condition_err; ?></span>
        </div>

        <div class="form-group <?php echo (!empty($item_url_err)) ? 'has-error' : ''; ?>">
            <label>Image Upload</label>
            <input type="file" name="fileToUpload" class="fileToUpload">
            <span class="help-block"><?php echo $item_url_err; ?></span>
        </div>

        <div class="row">
            <div class="form-group col-sm-9">
                <input name="addItem" id="addItem" type="submit" class="btn btn-primary" value="Add Item">
            </div>
            <div class="col-sm-3">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </div>
        <div class="col-sm-offset-8 col-sm-4 CW-item-button">
            <a class="btn btn-warning" href="my_account.php">Cancel Add Item</a>
        </div>
        <br>
    </form>
</div>
</body>

<?//php include_once 'footer.php';?>
<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" ></script>

</html>