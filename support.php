<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: includes_login.php");
    exit;
}

if ($_SESSION["verified"] == 0) {
    header("location: includes_verify.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support</title>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">

    <link href="CSS/support_styles.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<?php include_once('navbar_loggedin.php') ?>
<section>
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s"
                                                data-wow-duration="2s"> Touch with us</span></h1>
        <h3>Send us an email to report a profile, ask a question or to find out where UniAuction started.</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email ID">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description"> Message</label>
                        <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane"
                                                                                aria-hidden="true"></i> Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="map">
        <div class="gmap">
            <div class="found">Our Headquarters</div>
            <iframe id="gmap"
                    src="https://maps.google.com/maps?q=Gower%20Street%2C%20University%20College%20London&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

</section>

</body>
</html>
