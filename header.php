<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" class="js">
<head>
	<meta charset="UTF-8">
	<title>Reed Market</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="assets/components/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<!-- Script -->
	<script src="assets/components/jquery/dist/jquery.min.js"></script>
	<script src="scripts/main.js"> </script>
</head>
<body onload="initialize()">

<?php include("functions.php");
connect();
session_start();

if (isset($_SESSION['uid'])) {
	include ("safe.php");
}

include("parts/layout/navbar.php"); ?>
