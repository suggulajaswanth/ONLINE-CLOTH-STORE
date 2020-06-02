<!DOCTYPE html>
<html>
<head>
	<title>Count Down</title>
	<link href="count.css" rel="stylesheet" type="text/css">
	<body background="gif.gif">
	<style type="text/css">
	#clock{
		width:900px;
		margin:250px;
		text-align:center;
		font-size: 50px;
		left:80%;
		color:blue;
		padding-left: 6%;
		font-family: cursive;
		font-style:sans-serif;
		


	}
</style>
</head>
<body>
	<div class="container">
					<p>NEW ARRIVALS ON SATURDAY (Oct 26 2019) </p>
	</div>
<div id="clock"></div>
<script type="text/javascript">
    setInterval(displayclock, 500)
	function displayclock(){
		var time=new Date();
		var hrs=time.getHours();
		var min=time.getMinutes();
		var sec=time.getSeconds();
		var en='AM'

		if (hrs>12)
			en='PM'
		if (hrs>12){
			hrs=hrs-12;
		}
		if (hrs==0){
			hrs=12;

		
		}
		if (hrs<10){
			hrs='0'+hrs;
		}
		if (min<10){
			min='0'+min;
		}
		if (sec<10){
			sec='0'+sec;
		}
		document.getElementById('clock').innerHTML=hrs + ':' + min + ':' + sec + ' ' + en;
		document.getElementById('clock').innerHTML=Date();


	}
</script>
</body>
</html>
