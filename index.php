<?php
	include_once('./db/db.php');
$pass = '123123';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . . "</br>". "UserName: " . . "</br>" . "Password:". . "<br>";
	  $id=$row["id"];
	  $uname=$row["username"];
	  $pass=$row["pwd"];
  }
} else {
  //echo "0 results";
}

$conn->close();
?>
<!doctype html>
<html lang="en" dir="ltr">
  
	
<!-- Mirrored from php.spruko.com/zanex/zanex/pages/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 05:30:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		
		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – PHP Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, crypto, crypto dashboard, sales dashboard, bootstrap 5 admin template, ecommerce template, ecommerce dashboard, responsive dashboard, admin panel, bootstrap 5 admin dashboard, cryptocurrency dashboard, bootstrap dashboard, multi dashboard, html, responsive, responsive admin, bootstrap admin template, dashboard template, bootstrap">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="https://php.spruko.com/zanex/zanex/assets/images/brand/favicon.ico">

		<!-- TITLE -->
		<title>Zanex – PHP Bootstrap  Admin & Dashboard Template</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- STYLE CSS -->
		<link href="./assets/css/style.css" rel="stylesheet">
		<link href="./assets/css/plugins.css" rel="stylesheet">

		<!--- FONT ICONS CSS -->
		<link href="./assets/css/icons.css" rel="stylesheet">

	</head>

	<body class="login-img">

		<!-- BACKGROUND-IMAGE -->
		<div>

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page login-page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto mt-7">
						<div class="text-center">
							<img src="./assets/images/brand/sm.png" class="header-brand-img" alt="">
							<span class="login100-form-title">
										StockMento
							</span>
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form"  method="post" action="./loginpro.php" role="form" id="">
									<span class="login100-form-title">
										Login
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="uname" value="demo" placeholder="demo">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="pass" value="demo" placeholder="demo">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
									</div>
									<div class="">
										<!--<a href="index.html" class="login100-form-btn btn-primary">
											Login
										</a>-->
										<button type="submit" class="btn btn-primary btn-block btn-login"  name="submit" id="submit"> 
                            				<i class="entypo-login"></i> Login
                            			</button> 
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Not a member?<a href="register.html" class="text-primary ms-1">Create an Account</a></p>
									</div>
								</form>
							</div>
							<!--<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0);" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0);" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0);" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>-->
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		        
        <!-- JQUERY JS -->
        <script src="./assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="./assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- PERFECT SCROLLBAR JS -->
        <script src="./assets/plugins/p-scroll/perfect-scrollbar.js"></script>

        <!-- COLOR THEME JS -->
        <script src="./assets/js/themeColors.js"></script>

        <!-- SWITCHER STYLES JS -->
        <script src="./assets/js/swither-styles.js"></script>

        <!-- CUSTOM JS -->
        <script src="./assets/js/custom.js"></script>		

	</body>

<!-- Mirrored from php.spruko.com/zanex/zanex/pages/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 05:30:57 GMT -->
</html>
