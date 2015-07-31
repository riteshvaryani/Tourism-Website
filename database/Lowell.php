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
<br/>
<?php
include 'navbar.php'?>

<?php

$db="Lowell";
$db_r="Lowell_r";
?>
<form action="schedule.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
<input type="submit" id="submit"/>

</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php //include 'footer.php'
?>

</body>
</html>