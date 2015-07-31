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

$db="Franklin";
$db_r="Franklin_r";
?>
<form action="schedule.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:

<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Forge Park">Forge Park</option>

<option value="Franklin">Franklin</option>

<option value="Norfolk">Norfolk</option>

<option value="Walpole">Walpole</option>

<option value="Plimptonville">Plimptonville</option>

<option value="Windsor Gardens">Windsor Gardens</option>

<option value="Norwood Central">Norwood Central</option>

<option value="Norwood Depot">Norwood Depot</option>

<option value="Islington">Islington</option>

<option value="Dedham Corp.Center">Dedham Corp.Center</option>

<option value="Endicott">Endicott</option>

<option value="Readville">Readville</option>

<option value="Hyde Park">Hyde Park</option>

<option value="Ruggles">Ruggles</option>

<option value="Back Bay">Back Bay</option>

<option value="South Station">South Station</option>
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
<?php// include 'footer.php'
?>
</body>
</html>