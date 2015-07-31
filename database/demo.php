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

<p><h2 id="line">Select a line below to view schedules</h2></p>

<select id="selectline" name="code" ONCHANGE="location = this.options[this.selectedIndex].value;">

<option value="start">Select the line</option>

<option value="Fitchburg.php">Fitchburg</option>

<option value="Lowell.php">Lowell</option>

<option value="Haverhill.php">Haverhill</option>

<option value="Kingston.php">Kingston</option>

<option value="Needham.php">Needham</option>

<option value="Franklin.php">Franklin</option>
</select>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php include 'footer.php'?>
</body>
</form>