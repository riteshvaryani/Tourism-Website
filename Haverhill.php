<html>
<body>
<link rel="stylesheet"
type="text/css"
href="css.css" />

</head>

<body>
<script type="text/javascript"
src="j.js">
</script>

<?php
include 'layout.php'?>
<div id="mid">
<img src="qwe.jpg " width=400px height=150px>
</div>
<br/>
<?php
include 'navbar.php'?>
<?php include 'vertical.php'?>
<div class="asd">
<?php

$db="Haverhill";
$db_r="Haverhill_r";
?>
<form action="scheduleH.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:
<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Haverhill">Haverhill</option>

<option value="Bradford">Bradford</option>

<option value="Lawrence">Lawrence</option>

<option value="Andover">Andover</option>

<option value="Ballardvale">Ballardvale</option>

<option value="North Wilmington">North Wilmington</option>

<option value="Reading">Reading</option>

<option value="Wakefield">Wakefield</option>

<option value="Greenwood">Greenwood</option>

<option value="Melrose Highlands">Melrose Highlands</option>

<option value="Melrose Cedar Park">Melrose Cedar Park</option>

<option value="Wyoming Hill">Wyoming Hill</option>

<option value="Malden Center">Malden Center</option>

<option value="North Station">North Station</option>
</select><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Direction:
<select name="bound">
<option value="inbound">Inbound</option>

<option value="outbound">Outbound</option>
</select>
<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" />

</form>

</div>
</body>
</html>