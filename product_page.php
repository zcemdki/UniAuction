<?php
include 'BACKEND/includes_product_page.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="CSS/toastr/toastr.min.css" rel="stylesheet">

    <link href="CSS/animate.css" rel="stylesheet">

    <link href="CSS/navbar_styles.css" rel="stylesheet">

    <!-- JS for dropdowns-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"
            defer></script>
    <link href="CSS/style.css" rel="stylesheet">
    <script src="JAVASCRIPT/product_page.js" defer></script>
</head>

<body>
<?php include_once('navbar_loggedin.php') ?>
<div class="ibox">
    <div class="ibox-title">
        <!--<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>E-commerce grid</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="welcome.php">Home</a>
                    </li>
                    <li>
                        <a>E-commerce</a>
                    </li>
                    <li class="active">
                        <strong>Products grid</strong>
                    </li>
                </ol>
            </div>
        </div>-->
        <nav class="product-filter">
            <div class="sort">
                <div class="collection-sort">
                    <label>Filter by:</label>
                    <div id="myBtnContainer">
                        <button class="btn btn-default active" onclick="filterSelection('all')"> Show all</button>
                        <button class="btn btn-primary" onclick="filterSelection('Electronics, Books & Computers')"> Electronics, Books &
                            Computers
                        </button>
                        <button class="btn btn-primary" onclick="filterSelection('Clothes, Shoes & Watches')"> Clothes, Shoes &
                            Watches
                        </button>
                        <button class="btn btn-primary" onclick="filterSelection('Food & Grocery')"> Food & Grocery</button>
                        <button class="btn btn-primary" onclick="filterSelection('Health & Beauty')"> Health & Beauty</button>
                        <button class="btn btn-primary" onclick="filterSelection('Home & Kitchenware')"> Home & Kitchenware</button>
                    </div>
                </div>
            </div>

        </nav>
        <section class="ibox-content products">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <?php
                    $j = 0;
                    for ($i = 0;
                         $i < sizeof($itemArray);
                         $i++) {
                        ?>
                        <div class="col-md-3 filterDiv show <?php echo $itemArray[$i]['category'] ?>"
                             data-filter="<?php $itemArray[$i]['name'] ?>">
                            <div class="ibox">
                                <div class="ibox-content product-box">

                                    <div class="product-imitation">
                                        <?php if($itemArray[$i]['dir']== NULL)
                                        {
                                            echo "No image available";
                                        }?>
                                        <img src="<?php echo $itemArray[$i]['dir'];?>" class="item_image">
                                    </div>
                                    <div class="product-desc">
                                <span class="product-price">
                                    <?php echo "£" . $itemArray[$i]['price'] ?>
                                </span>
                                        <small class="text-muted"> <?php echo $itemArray[$i]['category'] ?></small>
                                        <a href="#" class="product-name"> <?php echo $itemArray[$i]['name'] ?></a>

                                        <div class="small m-t-xs">
                                            <?php echo $itemArray[$i]['description'] ?>
                                        </div>
                                        <div class="m-t text-right">
                                            <input type="hidden" id="itemId" name="itemId"
                                                   value="<?php echo $itemArray[$i]['id'] ?>">
                                            <a href="#" onclick="itemClicked(<?php echo $itemArray[$i]['id'] ?>)"
                                               class="btn btn-xs btn-outline btn-primary"><span
                                                        class="glyphicon glyphicon-plus"></span> Add to cart</a>
                                        </div>
                                        <div class="m-t text-left">
                                            <form action="seller_profile.php" method="post">
                                                <input type="hidden" id="account_id" name="account_id"
                                                       value="<?php echo $itemArray[$i]['account_id'] ?>">
                                                <button type="submit" class="btn btn-default">Seller Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>

        <!--    Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>


<?php include_once 'footer.php'; ?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</html>