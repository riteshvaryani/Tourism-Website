<html>
<head>

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

$db="Lowell";
$db_r="Lowell_r";
?>
<form action="scheduleL.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:

<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Lowell">Lowell</option>

<option value="North Billerica">North Billerica</option>

<option value="Haverhill">Haverhill</option>

<option value="Wilmington">Wilmington</option>

<option value="Anderson">Anderson</option>

<option value="Mishawum">Mishawum</option>

<option value="Winchester Center">Winchester Center</option>

<option value="Wedgemere">Wedgemere</option>

<option value="West Medford">West Medford</option>

<option value="North Station">North Station</option>

</select>
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Direction:
<select name="bound" id="bound">
<option value="inbound">Inbound</option>

<option value="outbound">Outbound</option>
</select>
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" id="submit"/>

</form>

</div>
</body>
</html>