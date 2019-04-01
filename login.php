<?php
include 'BACKEND/includes_login.php';
?>
<!DOCTYPE html>
<html lang='en' class=''>
<head>
    <meta charset='UTF-8'>
    <title> Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
    <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon"
          href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg"/>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
    <link rel="stylesheet" href="CSS/logo_styles.css">
    <link rel="stylesheet" href="CSS/login_styles.css"


</head>
<body>
<div id="UA-logo" class="col-sm-4">
    <a href="welcome.php"><img src="IMAGES/Full UniAuction Logo.png" class="UA-Logo" alt="UniAuction Logo"></a>
</div>
<div class="login">
    <h1>Sign In</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
        <input type="email" name="email" id="email_login" placeholder="Email" required="required"
               value="<?php echo $email; ?>"/>
        <span class="help-block"><?php echo $email_err; ?></span>
        <div <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input type="password" name="password" id="password_login" placeholder="Password" required="required"/>
        <span class="help-block"><?php echo $password_err; ?></span>
    </form>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block btn-large" value="Login">Sign In</button>
</div>
<p class="sign_up_now">New to UniAuction? <a href="register.php">Sign up here</a></p>

</body>
<?php //include_once 'footer.php';?>

<!-- JS for dropdowns-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</html>