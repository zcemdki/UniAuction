<?php
include 'BACKEND/includes_verify.php';
?>

<!DOCTYPE html>
<html lang='en' class=''>
<head>
    <meta charset='UTF-8'>
    <title>Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon"
          href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="CSS/logo_styles.css">
    <link href="CSS/verify_styles.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
</head>

<body>
<div id="UA-logo" class="col-sm-4">
    <a href="welcome.php"><img src="IMAGES/Full UniAuction Logo.png" class="UA-Logo" alt="UniAuction Logo"></a>
</div>
<div class="login">
    <h1>Account Verification</h1>
    <h6>A verification code has been sent to the email ID you registered with.</h6>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div <?php echo (!empty($verificationCode_err)) ? 'has-error' : ''; ?>">
        <input type="text" name="verify" placeholder="Enter code here" required="required"" />
        <span class="help-block"><?php echo $verificationCode_err; ?></span>

</div>

<div class="form-group">
    <br>
    <button type="submit" class="btn btn-primary btn-block btn-large" value="verify">Verify</button>
</div>
</form>
<form action="BACKEND/includes_logout.php">
    <div class="form-group">
        <button class="btn btn-primary btn-block btn-large" type="submit">Sign out</button>
    </div>
</form>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
</body>
</html>