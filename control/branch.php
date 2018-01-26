<?php
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "15";
header("Refresh: $sec; url=$page");
?>
<!DOCTYPE html>
<head>

<!--meta http-equiv='refresh' content='2;url='#'-->
<script>
function showPckgs(str) {
    if (str == true) {
		//alert(str);
        document.getElementById("pkgs").innerHTML = "";
        return;
    } else { 
	//alert(str);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pkgs").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","../cruises/getcruisepckgs.php",true);
        xmlhttp.send();
    }
}

function callajax()
{
	//alert('ajax call agent');
	window.open('www.google.co.in','PHP Pop Up','width=400,height=350' , 'directories=no','titlebar=no','toolbar=no','location=no','status=no','menubar=no','scrollbars=no','resizable=no');
}

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("mytable").deleteRow(i);
}

</script>
</head>
<body onLoad="showPckgs(false)">

<?php
if(!isset($_SESSION['login_user']) OR !isset($_SESSION['login_type'])) {
   header('location:login.html');
   exit;
}
else
{
echo "Welcome " . $_SESSION['login_user'];
echo "<hr><br>branch page<br>";
}

?>

<button id="statusb" onclick="ajax()">Status</button>
<br><br>

<div id="pkgs">package show here...</div>
<br>
<hr>
<a href="logout.php">Logout</a>