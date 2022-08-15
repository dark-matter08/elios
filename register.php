<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	$account = new Account($con);
	include("includes/handlers/db_handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<!-- CSS -->
	<link rel="icon" href="assets/images/icons/elio.png">
	<link rel="stylesheet" href="superslides/stylesheets/superslides.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/register.css">
	<title>Welcome to Elios</title>


	<!-- JS -->
	<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="superslides/jquery.superslides.min.js"></script>
	<script src="assets/js/register.js"></script>

</head>
<body>
	<?php
		if(isset($_POST['registerButton'])){
			echo '
				<script type="text/javascript">
				$(document).ready(function(){
					$("#loginForm").hide();
					$("#registerForm").show();
				});
				</script>';
		}else {
			echo '
				<script type="text/javascript">
				$(document).ready(function(){
					$("#loginForm").show();
					$("#registerForm").hide();
				});
				</script>';
		}
	 ?>

	<div id="background">
		<div id="loginContainer">
					<div id="inputContainer">
						<form class="" id="loginForm" action="register.php" method="post">
							<h2>Login to Your Account</h2>
							<?php echo $account->getError(Constants::$loginFailed); ?>
							<p>
								<label for="loginUsername">Username</label>
								<input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. Nde Lucien"  value="<?php getInputValue('loginUsername'); ?>" required>
							</p>
							<p>
								<label for="loginPassword">Password</label>
								<input type="password" id="loginPassword" name="loginPassword" placeholder="your password" value="" required>
							</p>
							<button type="submit" name="loginButton">LOG IN</button>

							<div class="hasAcountText">
								<span id="hideLogin">Don't have an account yet?, Signup here</span>
							</div>
						</form>

						<form class="" id="registerForm" action="register.php" method="post">
							<h2>Create an Account</h2>
							<p>
								<?php echo $account->getError(Constants::$error_un1); ?>
								<?php echo $account->getError(Constants::$error_un2); ?>
								<label for="Username">Username</label>
								<input type="text" id="Username" name="username" placeholder="e.g. Nde Lucien"  value="<?php getInputValue('username'); ?>" required>
							</p>
							<p>
								<?php echo $account->getError(Constants::$error_fn); ?>
								<label for="firstName">First Name</label>
								<input type="text" id="firstName" name="firstName" placeholder="e.g. Nde"  value="<?php getInputValue('firstName'); ?>" required>
							</p>
							<p>
								<?php echo $account->getError(Constants::$error_ln); ?>
								<label for="lastName">Last Name</label>
								<input type="text" id="lastName" name="lastName" placeholder="e.g. Lucien"  value="<?php getInputValue('lastName'); ?>" required>
							</p>
							<p>
								<?php echo $account->getError(Constants::$error_em1); ?>
								<?php echo $account->getError(Constants::$error_em2); ?>
								<?php echo $account->getError(Constants::$error_em3); ?>
								<label for="Email">Email</label>
								<input type="email" id="Email" name="email" placeholder="e.g. something@example.com"  value="<?php getInputValue('email'); ?>" required>
							</p>
							<p>
								<label for="confirmEmail">Confirm Email</label>
								<input type="email" id="confirmEmail" name="email2" placeholder="e.g. something@example.com"  value="<?php getInputValue('email2'); ?>" required>
							</p>
							<p>
								<?php echo $account->getError(Constants::$error_pw1); ?>
								<?php echo $account->getError(Constants::$error_pw2); ?>
								<?php echo $account->getError(Constants::$error_pw3); ?>
								<label for="Password">Password</label>
								<input type="password" id="Password" name="password" placeholder="your password" value="" required>
							</p>
							<p>
								<label for="confirmPassword">Confirm Password</label>
								<input type="password" id="confirmPassword" name="password2"placeholder="confirm your password"  value="" required>
							</p>
							<button type="submit" name="registerButton">SIGN UP</button>
							<div class="hasAcountText">
								<span id="hideRegister">Already have an account?, Log In here</span>
							</div>
						</form>
					</div>
					<div id="loginText">
						<h1>Get great music, right now</h1>
						<h2>Listen to loads of music for free</h2>
							<ul>
									<li>Discover music you'll fall in love with</li>
									<li>create tour own playlists</li>
									<li>follow aritists to keep up to date</li>
							</ul>
						</div>
		</div>
	</div>

</body>
</html>
