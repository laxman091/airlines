<!DOCTYPE html>
<head>
<!--meta http-equiv='refresh' content='2;url='getairlinespckgs.php'-->
<style>
a {text-decoration:none;}
</style>
<script>
function callajax()
{
	//alert('ajax call agent');
	var d = '../cruises/';
	window.open(document.location='test2.php','PHP Pop Up','width=400,height=350' , 'directories=no','titlebar=no','toolbar=no','location=no','status=no','menubar=no','scrollbars=no','resizable=no');
}

function deleteRecord()
{
	//code to delete record from database
}

</script>
</head>
<body>
<?php
//include 'connect.php';
//echo "<script type='text/javascript'>alert('Hello');</script>";
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('airlines');

if(!$con)
{
echo "could not connected " . mysql_error();
}
$db = mysql_select_db('airlines');

$sql = 'select * from airlinesrequest where status = 0 ';

$result = mysql_query($sql);

@ $record = mysql_num_rows($result);
if(!$result & $record <=0)
{
	echo 'Packages does not exist...';
}

?>
<table border="1" cellspacing="0" cellpadding="1" align="center" id="mytable">
<tr>
<th>Name</th><th>City</th><th>Contact</th><th>Days</th><th>Action</th></tr>

<?php
while($row = mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $row['name'];  ?></td><td><?php echo $row['city'];  ?></td><td><?php echo $row['contact'];  ?></td><td><?php echo $row['days'];  ?></td>
<td><input type="button" value="Process" onclick="callajax()"><a href="../airlines/delete_row.php?id=<?php echo $row['id']; ?>"><input type="button" value="Delete" onclick="deleteRow(this)"></a></td></tr>

<?php
}
?>
</table>

<?php
mysql_close($con);
?>
</body>
</html>