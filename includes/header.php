<!DOCTYPE html>
<?php 
include("includes/config.php"); 
include("languageswitch.php");
?>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet">
	</head>
<body>
	<div id="wrapper">
	<header>
		<!--Logotyp-->
		<div id="logo"><a href="index.php"><img src="images/lundavet_logo.png" alt="<?= $lang['ALT_LOGO']; ?>"></a></div>
		<!--Ändra språk - ikoner-->
		<div id="utility"><a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?lang=en"><img src="images/eng_icon.png" alt="Switch to english" title="English">English</a>
			<a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?lang=sv"><img src="images/swe_icon.png" alt="Byt till svenska" title="Swedish">Svenska</a>
		</div>
		<!--Meny-->
		<?php include('includes/navigation.php'); ?>
	</header>
<div id="main">