<?php 
require('connection.inc.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registretion form test</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div class="container">
		<div class="form w-50 mx-auto mt-4">
			<h3 class="card-header">User Registretion</h3>
			<form method="POST" class="card-body">
				<input name="name" type="text" class="form-control input_box" placeholder="Please insert Full Name" required>
				<input name="email" type="email" class="form-control input_box" placeholder="Please insert Email" required>
				<input name="password" type="password" class="form-control input_box" placeholder="Password" required>
				<input name="retype-password" type="password" class="form-control input_box" placeholder="Retype-Password" required>
				<input name="phone" type="tel" class="form-control input_box" placeholder="Mobile Number" required>
				<textarea name="address" type="text" class="form-control input_box" placeholder="Address"></textarea>
				<input name="country" type="text" class="form-control input_box" placeholder="Country">
				<input name="submit" type="submit" class="submit-button input_box" value="Registretion">
			</form>
		</div>
	</div>
	
<?php
	if(isset($_POST['submit'])){
		$name= $_POST['name'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$phone= $_POST['phone'];
		$address= $_POST['address'];
		$country= $_POST['country'];

		$result=mysqli_query($con,"INSERT INTO register VALUES ('','$name','$email','$password','$phone','$address','$country')");

	}
	

?>
	
	<script src="assets/js/main_script.js">
</body>
</html>