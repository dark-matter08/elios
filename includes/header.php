<?php
	include("includes/config.php");
	include("includes/classes/User.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");
	include("includes/classes/Song.php");
  include("includes/classes/Playlist.php");
	//session_destroy();
	if(isset($_SESSION['userLoggedIn'])){
		$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
		$username = $userLoggedIn->getUsername();
		echo "<script>userLoggedIn = '$username';</script>";
	} else {
		header("Location: register.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Elios</title>
	<!-- css -->
	<link rel="icon" href="assets/images/icons/elio.png">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- JS -->
	<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>
<body>


	<div id="mainContainer">
		<div id="topContainer">
			<?php include 'includes/navBarContainer.php'; ?>
			<div id="mainViewContainer">
				<div id="mainContent">
