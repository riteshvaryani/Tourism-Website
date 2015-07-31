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

$db="Fitchburg";
$db_r="Fitchburg_r";
?>
<form action="schedule.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:
<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Fithchburg">Fithchburg</option>

<option value="North Leominster">North Leominster</option>

<option value="Shirley">Shirley</option>

<option value="Ayer">Ayer</option>

<option value="Littleton">Littleton</option>

<option value="South Acton">South Acton</option>

<option value="West Concord">West Concord</option>

<option value="Conard">Conard</option>

<option value="Lincoln">Lincoln</option>

<option value="Silver Hill">Silver Hill</option>

<option value="Hasting">Hasting</option>

<option value="Kendal Green">Kendal Green</option>

<option value="Brandeis">Brandeis</option>

<option value="Waltham">Waltham</option>

<option value="Waverley">Waverley</option>

<option value="Belmont">Belmont</option>

<option value="Porter Square">Porter Square</option>

<option value="North Station">North Station</option>
</select>
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Direction:
<select name="bound" id="bound">
<option value="inbound">Inbound</option>

<option value="outbound">Outbound</option>
</select>
<br/>
<input type="submit" id="submit" />

</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


</body>
</html>