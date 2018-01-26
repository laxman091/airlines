<?php
session_start();

if(isset($_SESSION['login_user'])) //session_destroy() Destroying All Sessions
{
	session_destroy();
	unset($_SESSION['login_user']);
	header("Location: login.html"); // Redirecting To Home Page
	exit;
}

?>