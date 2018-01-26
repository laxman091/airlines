<?php
session_start();
?>
<!DOCTYPE html>
<head>
<!--script>
function callajax()
{
	
	//alert('ajax call agent');
	window.open('www.google.co.in','PHP Pop Up','width=400,height=350' , 'directories=no','titlebar=no','toolbar=no','location=no','status=no','menubar=no','scrollbars=no','resizable=no');
}

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("mytable").deleteRow(i);
	
	//code to call ajax to delete row from database
}
</script-->
</head>
<body>

<?php

if(!isset($_SESSION['login_user']) OR !isset($_SESSION['login_type'])) {
   header('location:login.html');
   exit;
}
else
{
echo "welcome " . $_SESSION['login_user'];
echo '<hr>';
//echo "<hr><br>agent";
}
?>

<button id="statusa" onclick="ajax()">Status</button>

<br><br>

<div id="pkgs">package show here...</div>
<br>

<br>
<hr>
<!--a href="login.html" onclick="<?php //session_destroy(); if(isset($_SESSION['login_user'])) unset($_SESSION['login_user']); ?>"/>Logout</a-->
<div id="sts"></div>
<a href="logout.php">Logout</a>
</body>
</html>