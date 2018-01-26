<?php
session_start();
?>

<?php
include 'connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$utype = $_POST['utype'];

$sql = "select * from members where username = '$user' AND password = '$pass' AND usertype = '$utype' ";

$result = mysql_query($sql);
//echo $result;
if(!$result)
{
	//echo "Error Found: " . mysql_error();
	echo "check your credentials...";
	include 'failed_login.php';
}
else
{
	$_SESSION['login_user']= $user;
	$_SESSION['login_type']= $utype;
	
	@ $count=mysql_num_rows($result);
		if($count)
		{
			if($utype == 'admin')
			{
				$_SESSION['login_user']= $user;
				$_SESSION['login_type']= $utype; 
			//echo "success";
			header('location:admin.php');
			}
			else if($utype == 'branch')
			{
				$_SESSION['login_user']= $user;
				$_SESSION['login_type']= $utype;
				header('location:branch.php');
			}
			else if($utype == 'agent')
			{
				$_SESSION['login_user']= $user;
				$_SESSION['login_type']= $utype;
				header('location:agent.php');
			}
			else
			{
				//header('location:failed_login.php');
				echo 'check your credentials<br>';
			}

		}
		else
		{
			header('location:failed_login.php');
		}
}

?>
<!--a href="login.html">Login Again</a-->