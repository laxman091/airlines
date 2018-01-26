<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="mysql"; // Mysql password 
$db_name="airlines"; // Database name 
$tbl_name="cruiserequest"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$id' ";
$result=mysql_query($sql);

// if successfully deleted
if($result){
//echo "Deleted Successfully";
//echo "<BR>";
//echo "<a href='delete.php'>Back to main page</a>";
header('Location:../control/branch.php');
}

else {
echo "ERROR " . mysql_error();
}
?> 

<?php
// close connection 
mysql_close();
?>