<!DOCTYPE html>
<html>
<head>
	<title>Redirection</title>
</head>
<body>
<?php 
$destinations = ["https://randomeme.xyz",
	"https://dev42.elanistudio.eu",
	"https://dev42.elanistudio.eu/forum.php",
	"https://dev42.elanistudio.eu/register.php",
	"https://dev42.elanistudio.eu/faq.php",
	"https://dev42.elanistudio.eu/file.php?id="];

$destinationFinale = $destinations[mt_rand(0, count($destinations) - 1)];

$nmbfiles = 2;

if($destinationFinale=="https://dev42.elanistudio.eu/file.php?id=") {
	$destinationFinale = $destinationFinale + (round(rand()*$nmbfiles)+1);
}

header("Status: 302 Moved Temporarily", false, 302);
header("Location: ".$destinationFinale);
?>