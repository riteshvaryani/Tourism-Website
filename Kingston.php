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

$db="Kingston";
$db_r="Kingston_r";
?>
<form action="scheduleK.php" method='post'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select your source:

<select name="select" id="select_station">
<option value="choose">Select A Station</option>

<option value="Kingston">Kingston</option>

<option value="Plymouth">Plymouth</option>

<option value="Halifax">Halifax</option>

<option value="Hanson">Hanson</option>

<option value="Whitman">Whitman</option>

<option value="Abington">Abington</option>

<option value="South Weymouth">South Weymouth</option>

<option value="Braintree">Braintree</option>

<option value="Quincy Center">Quincy Center</option>

<option value="JKF">JKF</option>


<option value="South Station">South Station</option>
</select>
<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Direction:
<select name="bound" id="bound">
<option value="inbound">Inbound</option>

<option value="outbound">Outbound</option>
</select><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" id="submit" />
</form>
</div>
</body>
</html>