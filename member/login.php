<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TECH TRACK</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/custom/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="../assets/fontawesome/css/font-awesome.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 1.42857143;
			color: #333;
			background-image: url('../uploads/6938839_3409297.jpg');
			/* Adjust the path to your background image */
			background-size: cover;
			/* Ensures the background image covers the entire body */
			background-repeat: no-repeat;
			/* Prevents the background image from repeating */
			padding-top: 50px;
			/* Match with the height of your navbar */
			display: flex;
			flex-direction: column;
			/* Stack children vertically */
			align-items: center;
			/* Center children horizontally */
			height: 100vh;
		}

		/* .container {
			width: 100%;
			max-width: 400px;
			/* Adjust the maximum width of the container 
			margin-right: auto;
			margin-left: auto;
		} */

		.panel {
			border: 1px solid transparent;
			border-radius: 4px;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		}

		.panel-body {
			padding: 15px;
		}

		.login-form {
			margin-bottom: 0;
			width: 125%;
			height: 110%;
		}

		.login-heading {
			text-align: center;
			padding: 15px;
			border-radius: 20px;
		}

		/* Apply padding only to the specific container */
		.custom-container {
			padding: 20px;
			margin-top: 12%;
			width: 100%;
			max-width: 400px;
			/* Adjust the maximum width of the container */
			margin-right: auto;
			margin-left: auto;
		}

		h2 {
			color: grey;
			font-family: times-new-roman;
			text-align: center;
			/* Align text to the left */
			padding: 15px;
			border-radius: 20px;
		}
		button{
			width: 101%;
		}
	</style>
</head>

<body>
	

	<div class="container custom-container"> <!-- Apply custom-container class here -->
		<form class="login-form frm_memberlogin panel panel-default">
			<h2 class="login-heading">BORROWER LOGIN</h2>
			<div class="panel-body">
				<div class="form-group">
					<label for="id_number">ID Number</label>
					<input type="number" id="id_number" name="id_number" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Log in</button>
					<br><br>
					<a href="../" style="padding-left:38%"> Go to Admin Panel</a>
				</div>
			</div>
		</form>
	</div>

	<?php include 'footer.php'; ?>
	<!-- Include necessary scripts here -->
</body>

</html>