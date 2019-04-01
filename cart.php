<?php
include 'BACKEND/includes_cart.php';
?>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/navbar_styles.css">
    <link rel="stylesheet" href="CSS/cart_styles.css"
    <!-- JS for dropdowns-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" defer></script>

</head>
<body>
<?php include_once ('navbar_loggedin.php')?>
<div class="container-fluid">
    <h2 class="col-sm-offset-3"> Shopping Cart </h2>
    <h5 class="col-sm-offset-3">The items you have chosen are ready to be bought.<br> Click below to Check Out.</h5>
    <div class="row">

        <div class="ibox-content col-sm-offset-3 col-sm-7">

            <table class="table">
                <thead>
                <tr>
                    <th>Item #</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Item ID</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < sizeof($itemArray); $i++) {
                    $sqlget2 = "SELECT * FROM item_information WHERE item_id = '" . $itemArray[$i]['itemId'] . "'";
                    $sqldata2 = mysqli_query($link, $sqlget2) or die("Error: " . mysqli_error($link));
                    $itemInfoArray = array();
                    $row = mysqli_fetch_array($sqldata2);
                    $temp = array();
                    $temp['name'] = $row['item_name'];
                    $temp['price'] = $row['price'];

                    ?>
                    <tr>
                        <td><?php echo ($i+1) . "." ?></td>
                        <td><?php echo $temp['name'] ?></td>
                        <td><?php echo "£" . $temp['price'] . ".00" ?></td>
                        <td><?php echo $itemArray[$i]['itemId'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-3">
                    <h4>Total Price: £ <?php
                        $totalPrice = '0';
                        for ($i = 0; $i < sizeof($itemArray); $i++) {
                            $sqlget2 = "SELECT * FROM item_information WHERE item_id = '" . $itemArray[$i]['itemId'] . "'";
                            $sqldata2 = mysqli_query($link, $sqlget2) or die("Error: " . mysqli_error($link));
                            $itemInfoArray = array();
                            $row = mysqli_fetch_array($sqldata2);
                            $total = array();
                            $total['price'] = $row['price'];
                            $totalPrice += $total['price'];
                        }
                        echo $totalPrice;
                        ?></h4>
                </div>
                <div class="col-sm-offset-6 col-sm-3">
                    <form method="post" action="transaction_history.php">
                        <button id='checkout' name='checkout' type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span> Proceed to Checkout</button>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>

</div>
</body>
<?php include_once 'footer.php';?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
