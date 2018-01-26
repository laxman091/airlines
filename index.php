<!--testing123-->
<!DOCTYPE html>
<html>
<head>
    <title>ABC Airlines Pvt. Ltd.</title>
    <link href="themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/js-image-slider.js" type="text/javascript"></script>
    <link href="themes/8/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/8/tooltip.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
    </script
	<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
	<!--script src="js/js1.js" type="text/javascript"></script-->
	<!--link href="css/style1.css" rel="stylesheet" type="text/css" /-->
<!--script type="text/javascript">

$(document).ready(function(){
//open popup
$("#pop").click(function(){
  $("#contact_form").fadeIn(1000);
  positionPopup();
});

//close popup
$("#close").click(function(){
	$("#contact_form").fadeOut(500);
});
});

//position the popup at the center of the page
function positionPopup(){
  if(!$("#contact_form").is(':visible')){
    return;
  } 
  $("#contact_form").css({
      left: ($(window).width() - $('#overlay_form').width()) / 2,
      top: ($(window).width() - $('#overlay_form').width()) / 7,
      position:'absolute'
  });
}

//maintain the popup at center of the page when browser resized
$(window).bind('resize',positionPopup);

</script-->
<!--style>
#contact_form{
	position: absolute;
	border: 5px solid gray;
	padding: 10px;
	background: white;
	width: 270px;
	height: 190px;
}
#pop{
	display: block;
	border: 1px solid gray;
	width: 65px;
	text-align: center;
	padding: 6px;
	border-radius: 5px;
	text-decoration: none;
	margin: 0 auto;
}
</style-->
</head>
<body>
    <?php 
include 'header.html';
?>
        <!--h2 align='center'>Abc Airlines</h2-->
        <!--p>
            Demos: <a href="demo1.html">1</a><a href="demo2.html">2</a><a href="demo3.html">3</a><a href="demo4.html">4</a>
            <a href="demo5.html">5</a><a href="demo6.html">6</a><a href="demo7.html">7</a><a href="demo8.html" class="current">8</a>
        </p-->
    </div>
<br>
<div class="div1">
    <div id="sliderFrame">
        <div id="slider">
            <a href="#" target="_blank">
                <img src="images/image-slider-1.jpg" alt="Airlines" />
            </a>
            <img src="images/image-slider-2.jpg" alt="Cruises" />
            <img src="images/image-slider-3.jpg" alt="Land Tour" />
            <img src="images/image-slider-4.jpg" alt="Holyland Tour" />
            <img src="images/image-slider-5.jpg" alt="Hellicopter" />
</div>

        
        <div style="display: none;">
            <div id="cap1">
                Welcome to <a href="http://www.menucool.com/">Menucool.com</a>.
            </div>
            <div id="cap2">
                <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
            </div>
        </div>
<?php
//include 'rightmenu.html';
?>
    </div>
<br><br>
<hr>
    <div class="div2">
        <!--p>You'll see thumbnail previews when hovering on pagination bullets in the demo. The thumbnail previews are created by the
        slider's built-in function, <span class="cn">thumbnailPreview</span>, with the assistance of the
        <a href="http://www.menucool.com/tooltip/javascript-tooltip" target="_blank">Menucool Tooltip</a> widget.</p>
        <p>Please visit <a href="http://www.menucool.com/slider/thumbnail-preview">http://www.menucool.com/slider/thumbnail-preview</a> for detailed instructions.</p>
        <p>This demo has not used the slider's advanced features, hence it does not require slider license. However, a Tooltip license is required for using the tooltip widget to preview thumbnails.
        <br /><em>If you have also included slider's advanced features, slider license is also required.</em></p-->
		<p align='center'>Welcome to ABC Airlines Pvt Ltd.</p>
		
		<!--p>Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Clients&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passenger</p><br-->
		<p align='center'><a href="control/login.html" id="pop" align='center'>Login</a></p>
<br />
<!--form id="contact_form" style="display:none">
	<h2> Enter your credential to Login</h2>
	<label>Username: </label><input type="text" name="username" /><br /><br />
	<label>Password: </label><input type="text" name="password" /><br /><br />
	<label>Username: </label><input type="text" name="username" /><br /><br />
	<label>Password: </label><input type="text" name="password" /><br /><br />
	<label>Username: </label><input type="text" name="username" /><br /><br />
	<label>Password: </label><input type="text" name="password" /><br /><br />
	<input type="button" value="Login" />
	<a href="#" id="close" >Close</a>
</form-->
    </div>
	<br>
	<br>
<?php
include 'footer.html';
?>
</body>
</html>