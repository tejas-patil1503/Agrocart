<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		news corl
	</title>
	<?php include "assets/csslink.php"?>
	<?php include "assets/jslink.php"?>

<script type="text/javascript">
var interval;
function startTicker()
{

$("#news li:first").slideUp(function(){
	$(this).appendTo($("#news")).slideDown();
});
}
function stopTicker(){
clearInterval(interval);
}
$(document).ready(function(){

interval=setInterval(startTicker,1000);
$("#news").hover(function(){
	stopTicker();
},function(){
	interval=setInterval(startTicker,1000);
});
});
</script>

</head>
<body>
	
	<ul id="news">
		<li>The<b>first</b> piece of news.The<b>first</b> piece of news.The<b>first</b>piece of news.</li>
	
	</ul>

	
</body>
</html>