<?php
include 'connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$utype = $_POST['utype'];
//print_r($_POST);

$user = stripcslashes($user);
$pass = stripslashes($pass);
$utype = stripslashes($utype);

$sql_already = "select * from members where username = '$user' AND password = '$pass' AND usertype = '$utype' ";

$result_already = mysql_query($sql_already);

//$data = mysql_fetch_array($result_already , MYSQL_NUM);
$count = mysql_num_rows($result_already);
//echo $count;

	if($count > 0)
	{
		echo '<br>user already exist';	//header('location: addedmember.php');
		echo "<br><a href='login.html'>Login</a>";
	}
	else{
		//user does not exist
		$sql = "insert into members (username , password , usertype) values ('$user' , '$pass' , '$utype')";

		$result = mysql_query($sql);

			if(!$result)
			{
				echo"Error Found: " . mysql_error();
			}
			else
			{
				header('location:success_member.php');
			}
	}

?>