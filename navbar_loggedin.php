
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/navbar_styles.css">
<script src="JAVASCRIPT/navbar_events.js" defer></script>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand img-responsive" href="welcome.php"><img src="IMAGES/UniAuctionLogo.png" alt="UniAuction Logo"></a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="UA-header-links"><a href="welcome.php">Home</a></li>
                <li class="alert-dark UA-header-links"><a onclick="emptySearch()">Shop</a></li>
                <li class="alert-dark UA-header-links"><a href="new_item.php">Sell</a></li>
                <li class="nav navbar-nav navbar-right " id="UA-margins">
                    <?php include 'search_box.php' ?>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="alert-dark UA-header-links"><a href="my_account.php">Welcome, <b><?php echo strtoupper(htmlspecialchars($_SESSION["first_name"])); ?></b></a></li>
                <li class="dropdown UA-header-links">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="myaccount.html">MyAccount
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="my_account.php">Account Details <span class="glyphicon glyphicon-user align-self-end"></span></a></li>
                        <li><a href="cart.php">Shopping Cart <span class="glyphicon glyphicon-shopping-cart align-content-end"></span></a></li>
                        <li><a href="transaction_history.php">Order History <span class="glyphicon glyphicon-time align-content-end"></span></a></li>
                        <li><a href="reset_password.php">Reset Password <span class="glyphicon glyphicon-refresh align-self-end"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="BACKEND/includes_logout.php" class="btn">Sign Out <span class="glyphicon glyphicon-log-in"></span></a></li>

                    </ul>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="JAVASCRIPT/navbar_events.js"></script>