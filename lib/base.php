<?php session_start(); ?>
<!DOCTYPE html>
<!-- 
	Code by Elanis
	2016
	Don't copy this without permission
	I hope this code is readable.
-->
<html>
<head>
	<!-- CHARSET / TITLE / KEYWORDS / FAVICON -->
	<title>Elanis</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="share, make, sell, buy, all, you, made, 42, elanis">
	<meta name="description" content="Bonjour ! Je suis Elanis, developpeur web et logiciel, et createur/codeur d'addons. Je suis aussi modeliseur et videaste debutant." />
	<link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
<?php
if(isset($_POST['langue'])) {

if($_POST['langue']=="Francais") { $_SESSION['lang'] =""; }
if($_POST['langue']=="English") { $_SESSION['lang'] ="en"; }
if($_POST['langue']=="Deutsch") { $_SESSION['lang'] ="de"; }

}


if(!isset($_SESSION['lang'])) { $_SESSION['lang']=""; }

//PHP INCLUDE
include_once('./lib/php/lang.php');
?>
	<!-- CSS INCLUDE -->
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="./lib/css/main.css"/>

	<!-- JAVASCRIPT INCLUDE -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<?php
include_once('./lib/php/menu.php');
?>