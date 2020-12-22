<?php
include ("katibu/session_handler.php");
?>

<!doctype html>
<html>

<head>

<title>Karibu</title>
<?php include "PHP_Handlers/CDNHeaderLinks.php"; ?>

</head>

<body>

<div id="main_logo_module"> <?php include ("nav_pills/MainLogo.php"); ?> </div>
<div id="user_info_menu"> <?php include ("katibu/user_info_module.php"); ?> </div>
<div id="nav_pills_menu"> <?php include ("nav_pills/TopNavFlexMenu.php"); ?> <div>

<br>


<!-- <div><?php// include "Bouncer/funguaHMR.php"; ?></div>
<div><?php// include "Bouncer/funga.php"; ?></div>
<div><?php// include "Bouncer/funguaHWR.php"; ?></div>
<div><?php// include "Bouncer/funga.php"; ?></div>
<br><a href ="ukuta.php">Proceed to my dashboard</a> -->

<div> <?php include "karibu/ukuta_ya_home.php";?> </div>


</body>
</html>