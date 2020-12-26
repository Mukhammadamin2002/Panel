<?php

include 'function.php';



?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Sign up</title>
	<style>
		body {
			background: #66CDAA;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 60px">
			<div class="col-10 col-md-6 card card-body">
				<h1 class="text-center">Create an account</h1>
				<form action="index.php" method="post">
					<div class="row">
						<div class="col">
							<label>First name</label>
							<input type="text" name="first_name" class="form-control <?php echo isset($errors['first_name']) ? 'is-invalid' : '' ?>" placeholder="Enter your first name" value="<?php echo $first_name ?>">
							<div class="invalid-feedback">
								<?php echo $errors['first_name'] ?? '' ?>
							</div>
						</div>
						<div class="col">
							<label>Last name</label>
							<input type="text" class="form-control" placeholder="Enter your last name" name="last_name" value="<?php echo $last_name ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1" style="margin-top: 10px">Email address</label>
						<input type="text" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby placeholder="Enter your email address" name="email" value="<?php echo $email ?>">
						<small id="emailHelp" class="form-text text-muted text-center">We'll never share your email with anyone else.</small>
						<div class="invalid-feedback">
							<?php echo $errors['email'] ?? '' ?>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Create a password" name="password" value="<?php echo $password ?>">
						<div class="invalid-feedback">
							<?php echo $errors['password'] ?? '' ?>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm your password</label>
						<input type="password" class="form-control <?php echo isset($errors['pwd_confirm']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Confirm your password" name="pwd_confirm" value="<?php echo $pwd_confirm ?>">
						<div class="invalid-feedback">
							<?php echo $errors['pwd_confirm'] ?? '' ?>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" style="width: 250px">Submit</button>
					</div>
					<div class="card-footer text-center" style="margin-top: 20px">
						<p>Already have an account? <a href="#">Sign in here</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
