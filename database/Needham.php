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

$db="Needham";
$db_r="Needham_r";
?>
<form action="schedule.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:

<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Needham Heights">Needham Heights</option>

<option value="Needham Center">Needham Center</option>

<option value="Needham Junction">Needham Junction</option>

<option value="Hersey">Hersey</option>

<option value="West Roxbury">West Roxbury</option>

<option value="Highland">Highland</option>

<option value="Bellevue">Bellevue</option>

<option value="Roslindale Village">Roslindale Village</option>

<option value="Forest Hills">Forest Hills</option>

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
<?php//include 'footer.php'
?>

</body>
</html>