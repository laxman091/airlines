function testajax()
{
	//alert('button ajax');
	
	var name = document.getElementById('ps').value;
	var cntry = document.getElementById('cn').value;
	var ct = document.getElementById('ct').value;
	var code = document.getElementById('code').value;
	var mb = document.getElementById('mb').value;
	var pno = document.getElementById('pno').value
	
	var str = name + '&' +  cntry + '&' + ct + '&' + code + '&' + mb + '&' + pno
	alert('str: ' + str);
	if (str == "") {
		alert('empty str');
        document.getElementById("txtResult").innerHTML = "";
        return;
    } else { 
	//alert("1");
	//debugger;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				//debugger;
				alert('4');
                document.getElementById("txtResult").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","booking.php?q="+str,true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }
}

