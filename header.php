<?php include "init.php"; ?>

<?php (isset($_GET['lang']))? include 'langs/'.$_GET["lang"].'.php' : include 'langs/english.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta chrset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap</title>

		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<!-- <link rel="stylesheet" href="css/bootstrap_rtl.css"/> -->
		<link rel="stylesheet" href="css/style.css"/>

		<!-- tmlTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body> 
		