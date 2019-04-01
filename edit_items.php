<?php
include 'BACKEND/includes_edit_items.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/my_account_styles.css">
    <link rel="stylesheet" href="CSS/navbar_styles.css">
</head>


<body>
<?php include_once ('navbar_loggedin.php')?>
<div class="wrapper panel panel-default col-sm-4 col-sm-offset-4 CW-profile-panel" >
    <h2>Item information</h2>
    <p>Choose the item you want to edit.</p>

    <form class="form-group" id="items" name="items" method="post" action="">
        <select class=form-control id='item' name="item" >

            <?php get_options() ?>

        </select>
        <br>
        <form class="CW-item-button">
            <input class="btn btn-primary col-sm-offset-9 col-sm-3" type="submit" name="submit" value="Go">
        </form>
    </form>

    <?php

    global $j;
    if (isset($_POST['submit'])) {
    $selectOption = $_POST['item'];
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php

        for ($j = 1; $j <= mysqli_num_rows($sqldata); $j++) {
            if ($selectOption == $item_name[$j]) {
                ?>
                <div class="form-group">
                    <br> <br> <br>
                    <label>Item ID</label>
                    <input type="text" name="item_id" class="form-control" value="<?php echo $item_id[$j]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Item Name</label>
                    <input type="text" name="item_name" class="form-control" value="<?php echo $item_name[$j]; ?>">
                </div>
                <div class="form-group">
                    <label>Item category</label>
                    <select name="category" class="form-control">
                        <option value="" selected="selected">Select a Category</option>
                        <option value="Electronics, Books & Computers">Electronics, Books & Computers</option>
                        <option value="Clothes, Shoes & Watches">Clothes, Shoes & Watches</option>
                        <option value="Food & Grocery">Food & Grocery</option>
                        <option value="Health & Beauty">Health & Beauty</option>
                        <option value="Home & Kitchenware">Home & Kitchenware</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Item price</label>
                    <input type="text" name="price" class="form-control" value="<?php echo $price[$j]; ?>">
                </div>
                <div class="form-group">
                    <label>Item color</label>
                    <input type="text" name="color" class="form-control" value="<?php echo $color[$j]; ?>">
                </div>
                <div class="form-group">
                    <label>Item description</label>
                    <input type="text" name="description" class="form-control" value="<?php echo $description[$j]; ?>">
                </div>
                <div class="form-group">
                    <label>Item condition</label>
                    <select name="item_condition" class="form-control">
                        <option value="" selected="selected">Choose a Condition</option>
                        <option value="New">New</option>
                        <option value="Like New">Like New</option>
                        <option value="Very Good">Very Good</option>
                        <option value="Good">Good</option>
                        <option value="Acceptable">Acceptable</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-sm-9">
                        <input type="submit" name="enter" class="btn btn-primary" value="Confirm Edit">
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" name="delete_item" class="btn btn-danger" value="Delete Item">
                    </div>
                </div>
                <button class="col-sm-offset-9 col-sm-3 btn btn-warning" href="my_account.php">Cancel Edit</button>
                <?php

            }
        }
        }

        ?>
    </form>
</div>

</body>
<?//php include_once 'footer.php';?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
