<html>
<body>
<?php
$code="hey";
@$code=$_POST["code"];
echo $code;
?>
<form action="schedule.php" method='post'>
<select name="select">
<option value="choose">Select A Station</option>

<option value="Fithchburg">Fithchburg</option>

<option value="Shirley">Shirley</option>

<option value="South Acton">South Acton</option>

<option value="West Concord">West Concord</option>

<option value="Lincoln">Lincoln</option>

<option value="Silver Hill">Silver Hill</option>

<option value="Hasting">Hasting</option>

<option value="Waltham">Waltham</option>

<option value="Belmont">Belmont</option>

<option value="North Station">North Station</option>
</select>

<input type="submit" />

</form>


</body>
</form>