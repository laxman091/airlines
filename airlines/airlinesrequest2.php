<?php
include '../connection/connect.php';

//print_r($_POST);
$name = mysql_real_escape_string($_POST['field1']);
$city = mysql_real_escape_string($_POST['field2']);
$contact = mysql_real_escape_string($_POST['field3']);
$day = mysql_real_escape_string($_POST['field4']);

//echo $f2;

$sql_select = "select * from airlinesrequest where name = '$name' AND city = '$city' AND contact = '$contact' AND days = '$day' ";
$result = mysql_query($sql_select);
if(!$result)
{
	echo "Mysql Error: " . mysql_error(); 
}

@ $exist = mysql_num_rows($result);

if($exist>0)
{
	echo "Request already recieved by you...<br>";
}
else
{
	
$sql = " insert into airlinesrequest (name , city , contact , days) values('$name' , '$city' , '$contact' , '$day')";

$result = mysql_query($sql);
echo "Request recieved by You...<br>";
if(!$result)
{
	echo "Mysql Error: " . mysql_error(); 
}
}


mysql_close($con);
?>
<br>
<a href="airlines.php">Back</a><br>
Thanks for query!<br>
Our Representative will contact you soon...