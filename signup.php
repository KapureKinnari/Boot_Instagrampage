<?php
	include('connection.php');
	error_reporting(0);
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query="INSERT INTO `signup_form`(`email`, `fullname`, `username`, `password`) VALUES ('$email','$fullname','$username','$password')";
	mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Instagram Signup</title>
	<link rel="icon"  href="assets/images/insta2.png">
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet"  href="D:\xampp\htdocs\instagram\assets\css">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 		
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="mx-auto col-10 col-md-8 col-lg-4 pt-3">
				<form method="post">
				<div class="card p-4">
					<div class="card-body">	
						<img class="card-img-top img-responsive center-block wrapper" src="assets/images/insta.png">
						<h6 class="text-center pb-3" style="color:grey;">Sign up to see photos and videos from your friends.</h6>

						<div class="row">
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary btn-sm w-100"><b><img src="assets/images/fb_lite2.png" class="pr-1 pl-1">Log in with facebook</b></button>
							</div>
						</div>
						<hr>
						<input type="email" class="form-control form-control-sm mt-3" placeholder="Mobile Number or Email" name="email" id="email">
						<input type="text" class="form-control form-control-sm mt-2" placeholder="Full Name" name="fullname" id="fullname">
						<input type="text" class="form-control form-control-sm mt-2" placeholder="Username" name="username" id="username">
						<input type="password" class="form-control form-control-sm mt-2" placeholder="Password" name="password"id="password">
						<br>

						<p class="text-center text-secondary" style="font-size: 12px;">People who use our service may have uploaded your 
						contact information to Instagram.<a href="learn more"> Learn More</a></p>
						<br>
						<p class="text-center text-secondary" style="font-size: 12px;">
							By signing up, you agree to our <a href="Terms">Terms</a>, <a href="Privacy Policy">Privacy</a> and <a href="Cokkies Policy">Cokkies Policy</a></p>
						<div class="row">
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-info btn-sm  w-100"><b>Sign up</b></button>
							</div>
						</div>
					</div>
				</div>
			</form>	
				<br>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12 col-12">
						<div class="card">
							<div class="card-body">
								<p class="text-center">Have an account? <a href="login.php" target="_blank" class="text-dark">Log in</a></p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<p class="text-center">GET THE APP</p>
				<br>
				<div class="row ">
      					<div class="col">
      						<a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=ig_mid%3DACB8E88E-7A47-4F23-8678-EF34BC4715C0%26utm_campaign%3DloginPage%26utm_content%3Dlo%26utm_source%3Dinstagramweb%26utm_medium%3Dbadge" target="_blank">
       						<img class="img-fluid" src="assets/images/play2.png">
      					</div>
    					<div class="col">
    						<a href="ms-windows-store://pdp/?productid=9nblggh5l9xt&referrer=appbadge&source=www.instagram.com&mode=mini&pos=0%2C0%2C1920%2C1020" target="_blank">
        					<img src="assets/images/micro2-.png" alt="sry" class="img-fluid">
      					</div>
    			</div>
				<br>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-12">
				<div class="text-center p-5" style="font-size: 12px;">
					<a href="https://about.meta.com/" class="pr-2 text-secondary">Meta</a>
					<a href="https://about.instagram.com/" class="pr-2 text-secondary">About</a>
					<a href="https://about.instagram.com/blog/" class="pr-2 text-secondary">Blog</a>
					<a href="/about/jobs/" class="pr-2 text-secondary">Jobs</a>
					<a href="https://help.instagram.com/" class="pr-2 text-secondary">Help</a>
					<a href="https://developers.facebook.com/docs/instagram" class="pr-2 text-secondary">API</a>
					<a href="/legal/privacy/" class="pr-2 text-secondary">Privacy</a>
					<a href="/legal/terms/" class="pr-2 text-secondary">Terms</a>
					<a href="/directory/profiles/" class="pr-2 text-secondary">Top Accounts</a>
					<a href="/explore/locations/" class="pr-2 text-secondary">Locations</a>
					<a href="/web/lite/" class="pr-2 text-secondary">Instagram Lite</a>
					<a href="https://www.facebook.com/help/instagram/261704639352628" class="text-secondary pr-2">Contact Uploading & Non-Users</a>
					<a href="https://about.meta.com/technologies/meta-verified/" class="text-secondary pr-2">Meta Verified</a>
						<div class="text-center pt-4 text-secondary">
							© 2023 Instagram from Meta
						</div>
				</div>
			</div>
		</div>		
	</footer>
</body>
</html>