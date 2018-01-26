function myFunction() {
var passngr = document.getElementById("name").value;
var cntry = document.getElementById("email").value;
var cty = document.getElementById("password").value;
var pcode = document.getElementById("pcode").value;
var contact = document.getElementById("mob").value;
var pcode = document.getElementById("contact").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
if (passngr == '' || cntry == '' || cty == '' || pcode == '' || mob == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "sendrequest.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}