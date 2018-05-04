<?php
include 'auth.php';
session_start();
if (auth($_GET["login"], $_GET["passwd"]) == true)
{
	echo "OK\n";
	$_SESSION['logged_on_user'] = $_GET["login"];
}
	else
	{
		echo "ERROR\n";
		$_SESSION['logged_on_user'] = "";
	}
?>