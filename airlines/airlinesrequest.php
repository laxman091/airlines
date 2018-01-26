d<!DOCTYPE html>
<html>
<head>
<title>Authentication Process...</title>
	<title>Welcome Cruises</title>

	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="../assets-2/css/reset.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abeezee:400|Open+Sans:400,600,700|Source+Sans+Pro:400,600">
	<link rel="stylesheet" type="text/css" href="defaults.css">
	<link rel="stylesheet" type="text/css" href="demo.css">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="accordion.js"></script>
	<script type="text/javascript" src="jquery-1.6.1.min.js"></script>

<script type="text/javascript" src="jquery-1.6.1.min.js"></script>

<script type="text/javascript">
<!-- Login popup-->
$(document).ready(function(){
//open popup
$("#pop2").click(function(){
  $("#overlay_signup").fadeIn(1000);
  positionPopup();
});

//close popup
$("#close2").click(function(){
	$("#overlay_signup").fadeOut(500);
});
});

//position the popup at the center of the page
function positionPopup(){
  if(!$("#overlay_signup").is(':visible')){
    return;
  } 
  $("#overlay_signup").css({
      left: ($(window).width() - $('#overlay_signup').width()) / 2,
      top: ($(window).width() - $('#overlay_singup').width()) / 7,
      position:'absolute'
  });
}

//maintain the popup at center of the page when browser resized
$(window).bind('resize',positionPopup);

</script>
<style>

#pop2{
	display: block;
	border: 1px solid gray;
	width: 110px;
	text-align: center;
	padding: 6px;
	border-radius: 5px;
	text-decoration: none;
	margin: 0 auto;
}
#overlay_signup{
	position: absolute;
	border: 5px solid gray;
	padding: 10px;
	background: white;
	width: 270px;
	height: 250px;
}

</style>

</head>
<body>
	<!--header class="site-header-wrap">
		<div class="site-header">
			<!--a class="site-logo" href="http://inspirationalpixels.com">Inspirational Pixels <span>DEMO</span></a-->

			<!--nav class="site-nav">
				<a href="http://inspirationalpixels.com/tutorials/creating-an-accordion-with-html-css-jquery"><span class="fa-reply"></span>Back To Tutorial</a>
				<a href="http://inspirationalpixels.com/tag/demo"><span class="fa-eye"></span>All Demos</a>
			</nav-->
		</div>
	</header-->
	
	<div class="main">
		<div class="accordion">
			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-1">Description</a>
				<div id="accordion-1" class="accordion-section-content">
					<p>Cruises on holland america line is very attractive cruise to enjoy and excitement.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2">Itenerary</a>
				<div id="accordion-2" class="accordion-section-content">
					<p>Day 1:<br>
					This is day 1
					</p>
					<p>Day 2:<br>
					This is day 2
					</p>
					<p>Day 3:<br>
					This is day 3
					</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3">Price</a>
				<div id="accordion-3" class="accordion-section-content">
					<p>Price: USD 1200.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
		</div><!--end .accordion-->
		
<!--p>
Welcome to ABC Airlines Pvt. Ltd.
</p-->
<!--p>
<br><br><br><br>
</p-->
&nbsp;<a href="#" id="pop2" >Send Request</a>
<br />
<form method='post' action='cruiserequest.php' id='overlay_signup' style='display:none'>
	<h2>Package Request</h2>
	<label>Name: </label><input type="text" name="field1" id="txt1"/><br /><br />
	<label>City: </label><input type="text" name="field2" id="txt2"/><br /><br />
	<label>Contact: </label><input type="text" name="field3" id="txt3"/><br /><br />
	<label>Day: </label><input type="text" name="field4" id="txt4"/><br /><br />

	<input type="submit" value="Submit" id="submit" onsubmit="style'display:none;' "/>
	<a href="#" id="close2" >Close</a>
</form>
<br>
<br>
	<!--div id="txtResult"><b>Person info will be listed here...</b></div-->

</body>
</html>