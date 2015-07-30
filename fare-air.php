<html>
<?php
include 'layout.php'?>
<body>

<script type="text/javascript"
src="j.js">
</script>
<link rel="stylesheet"
type="text/css"
href="css.css" />

<div id="mid">
<img src="a1.jpg " width=400px height=150px>
</div>
<br />
<br/>
<?php
include 'navbar.php'?>

<br/>
<br/>
<script>
function opacity(id)
{
	
	if(id=="arrive")
	{
	document.getElementById("arrive").style.opacity=1;
	document.getElementById("depart").style.opacity=0.5;
	}
	else if(id=="depart")
	{
	document.getElementById("arrive").style.opacity=0.5;
	document.getElementById("depart").style.opacity=1;
	}
}
</script>
<a id="arrive" style="opacity:1" onclick="opacity(id)"href="arrival.php" target="myframe"><img src="a.jpg" id="arr"height=85px width=200px /></a>
<a id="depart" style="opacity:0.5" onclick="opacity(id)" href="departure.php" target="myframe"><img src="d.jpg" id="dept"height=85px width=200px /></a>
<br/>
<iframe src="arrival.php" name="myframe" id="iframe" width=500 height=550>Your browser does not support frames</iframe>

</iframe>
<?php include 'footer.php'?>
</body>
</html>



