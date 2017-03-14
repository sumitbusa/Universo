<?php 
	session_start();
	if(!isset($_SESSION["Message"]))
		$_SESSION["Message"]="";
?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-register-sign-in">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
	<?php 
			
		if(!isset($_SESSION["username"]))
			require("pages/header/register-sign-in-header-without-login.php");
		else
			require("pages/header/register-sign-in-header.php");
	?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Register or Sign in</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
						<div style="background-color:red"><center><span id="invalid"><h3><?php echo $_SESSION["Message"];$_SESSION["Message"]="";?></h3></span></center></div>
					<div class="row">
                        <div class="col-md-6">
                            <section id="account-register" class="account-block">
                                <header><h2>Create New Account</h2></header>
                                <form role="form" class="clearfix" id="submit-registeration" name="submit-registeration">
                                    <div class="form-group">
                                        <label for="new-account-name">Full Name</label>
                                        <input type="text" class="form-control" id="new-account-name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-email">Email address</label>
                                        <input type="email" class="form-control" id="new-account-email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Password</label>
                                        <input type="password" class="form-control" id="new-account-password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" name="repassword" placeholder="Repeat Password">
                                    </div><div id="form-status_re"></div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="terms" value="terms">I Understand <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                    <button type="submit" id="submit-form-register" name="submit-form-register" class="btn pull-right">Create New Account</button>
									
                                </form>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Have an Account?</h2></header>
                                <form  class="clearfix" id="form" name="form" method="post">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="slider-email" id="slider-email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="slider-name" name="slider-name" placeholder="Password" required>
                                    </div>
                                    <button type="submit"  name="submit" id="submit" class="btn pull-right">Sign In</button>
									<div id="form-status"></div>
                                </form>
					
                                <hr>

                                <p>Login is required for see our events also if you want to Join in our course.</p>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
	<?php require("pages/footer.php");?>
<!-- end Footer -->

</div>
<!-- end Wrapper -->
<?php require("pages/script.php");?>

</body>
</html>