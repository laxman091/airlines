<?php
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "15";
header("Refresh: $sec; url=$page");
?>
<!DOCTYPE html>
<head>

<!--meta http-equiv='refresh' content='2;url='#'-->
</head>
<body>

<?php

if(!isset($_SESSION['login_user']) OR !isset($_SESSION['login_type'])) {
   header('location:login.html');
   exit;
}
else
{
echo 'Welcome ' . $_SESSION['login_user'];
echo '<hr>';
//print_r($_SESSION, TRUE);
echo "<br>Admin Page<br>";

}
?>
<br>
<table border="1" cellspacing="0" cellpadding="1" align="center">
<tr>
<th>Package</th><th>Itinerary</th><th>Destination</th><th>Type</th><th>Action</th></tr>
<tr>
<td>test</td><td>6D/5N</td><td>Alaska</td><td>Holland</td><td><button id="p">Process</buttton><button id="c">Cancel</button></td></tr>

</table>
<br>
<hr>
<!--a href="logout.php" onclick="<?php //session_destroy(); if(isset($_SESSION['login_user'])) unset($_SESSION['login_user']); ?>"/>Logout</a-->
<a href="logout.php">Logout</a>
</body>
</html>