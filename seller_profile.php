<?php
include 'BACKEND/includes_seller_profile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/navbar_styles.css">
    <link rel="stylesheet" href="CSS/my_account_styles.css">
</head>
<body>
<?php include_once ('navbar_loggedin.php')?>

<div class="container-fluid">
    <div class="col-lg-1">

    </div>
    <div class="row">
        <div class="col-lg-4 panel panel-default CW-profile-panel">
            <div class="col-lg-5 panel-body">
                <div class="row">
                    <img src="..." class="card-img-top" alt="...">
                </div>

                <div class="row">
                    <button type="button" class="btn btn-danger" onclick="window.location.href='support.php'">Report Profile</button>
                </div>

            </div>

            <div class="col-lg-7 panel-body">
                <p class="CW-profile-header"><b><?php echo $temp['first_name'] . $temp["last_name"]; ?></p>
                <P Class="CW-profile-content">University: <?php ?></P>
                <P Class="CW-profile-content">Total Sales: 11 </P>
                <p Class="CW-profile-content"><b>Details</b></p>
                <p Class="CW-profile-content">lola ipsum mori duka lola oepwm ioermp</p>
                <p Class="CW-profile-content"><b>Recent listings</b></p>
                <p Class="CW-profile-content">lola ipsum mori duka lola oepwm ioermp</p>
                <button type="button" class="btn btn-primary" href="">Chat</button>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid">
    <?php
    item_panels();
    ?>
</div>

</body>
<?php include_once 'footer.php';?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>