<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if($_SESSION["verified"] == 0) {
    header("location: verify.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uni Auction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="CSS/navbar_styles.css">
</head>

<body>
<?php include_once ('navbar_loggedin.php')?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <video class="bg-video" poster="https://www.ucl.ac.uk/home/sites/home/files/homepage/ucl-quad-52-smed.jpg" playsinline="" autoplay="" muted="" loop="">
                <source src="https://www.ucl.ac.uk/home/sites/home/files/homepage/ucl-banner-film-14jan19.mp4" type="video/mp4">
            </video>
            <div class="carousel-caption">
                <h3>We deliver here...</h3>
                <p>Wherever you go to University.. UniAuction.</p>
            </div>
        </div>

        <div class="item">
            <img src="https://www.mit.edu/files/images/201806/MIT%20Flickr%20Library_1019-346-Photo%20by%20Jake%20Belcher_preview.jpeg" alt="MIT">
            <div class="carousel-caption">
                <h3>and here..</h3>
                <p>Even the little ones.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="why_us" class="container text-center">
    <h3>Why UniAuction?</h3>
    <p>Here at UniAuction, we're building a community. The team here are students, and we know exactly the struggles you all go through when shopping, ordering and getting your stuff delivered whilst at Uni. That's why we created UniAuction, to streamline it all and make everyone's life easier.</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <div class="info">
                <div class="icon icon-info">
                    <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Chat with the people buying or selling. Everything on UniAuction is personnel, especially the shopping experience.</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="info">
                <div class="icon icon-success">
                    <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Everyone buying & selling on UniAuction is a verified member of their University. That means no scams, no fakes and no intruders.</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="info">
                <div class="icon icon-danger">
                    <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Security</h4>
                <p>The UniAuction team takes security and privacy very seriously. We will never sell your personal information on, and all passwords and bank details are hashed to keep everything secure.</p>
            </div>
        </div>
    </div>
</div>
</body>
<?php include_once 'footer.php';?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>