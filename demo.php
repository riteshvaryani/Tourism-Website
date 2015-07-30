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
<div id="mid">
<img src="subway.jpg " width=400px height=150px>
</div>
<br />
<?php
include 'navbar.php'?></br>
<?php include 'vertical.php'?>
<div class="asd">
<p><h2 id="line">Select a line below to view schedules</h2></p>
<form >
<select id="selectline" name="code" ONCHANGE="location = this.options[this.selectedIndex].value;">

<option value="start">Select the line</option>

<option value="Fitchburg.php">Fitchburg</option>

<option value="Lowell.php">Lowell</option>

<option value="Haverhill.php">Haverhill</option>

<option value="Kingston.php">Kingston</option>

<option value="Franklin.php">Franklin</option>
</select><br/>&nbsp;&nbsp;
<input type="submit" id="submit" />
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<?php include 'footer.php'?>
</body>
</form>