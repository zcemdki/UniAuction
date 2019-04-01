<?php
include 'BACKEND/includes_register.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
    <meta name="description" content="">
    <meta name="author" content="Uni Auctions">
    <meta name="generator" content="Jekyll v3.8.5">
    <script type="text/javascript" src="js/Javascript.js" defer></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/register_styles.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="login-signup nav-tab-holder">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active col-sm-12 blue"><a href="#home">Account</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="row">

                        <div class="col-sm-6 mobile-pull">
                            <article role="login">
                                <h3 class="text-center"><i class="fa fa-lock"></i> Account Signup</h3>
                                <form class="signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                      method="post" >
                                    <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control"
                                                   placeholder="First Name" value="<?php echo $first_name; ?>">
                                            <span class="help-block"><?php echo $first_name_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name"
                                                   value="<?php echo $last_name; ?>">
                                            <span class="help-block"><?php echo $last_name_err; ?></span>
                                        </div>

                                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                            <input type="email" name="email" class="form-control"
                                                   placeholder="Email Address" value="<?php echo $email; ?>">
                                            <span class="help-block"><?php echo $email_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($university_err)) ? 'has-error' : ''; ?>">
                                            <input type="university" name="university" class="form-control"
                                                   placeholder="University" value="<?php echo $university; ?>">
                                            <span class="help-block"><?php echo $university_err; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <input type="password" name="password" class="form-control"
                                                   placeholder="Password" value="<?php echo $password; ?>">
                                            <span class="help-block"><?php echo $password_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                            <input type="password" name="confirm_password" class="form-control"
                                                   placeholder="Confirm Password"
                                                   value="<?php echo $confirm_password; ?>">
                                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required name="terms"> Please accept the terms and conditions to
                                                    proceed.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-block" value="Sign Up" >
                                        </div>

                                </form>

                                <footer role="signup" class="text-center">
                                    <ul>
                                        <li>
                                            <a href="#">Terms of Use</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Statement</a>
                                        </li>
                                    </ul>
                                </footer>

                            </article>
                        </div>

                        <div class="col-sm-6">
                            <article role="manufacturer" class="text-center">
                                <header class="blue">
                                    Create Account
                                </header>
                                <h1> Account Benefits</h1>
                                <ul class="text-left">
                                    <li><span class="fa fa-check"></span> View Listings</li>
                                    <li><span class="fa fa-check"></span> Safe Transactions</li>
                                    <li><span class="fa fa-check"></span> Verified Sellers</li>
                                    <li><span class="fa fa-check"></span> Priority Locker Availability</li>
                                    <li><span class="fa fa-check"></span> Free Delivery to Locker</li>
                                    <li><span class="fa fa-check"></span> Affordable Prices</li>
                                </ul>
                            </article>
                        </div>

                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of home -->

            </div>
        </div>
    </div>
</div>
</body>
</html>



