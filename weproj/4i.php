<html>
<body>
<link rel="stylesheet"
type="text/css"
href="css.css" />

<?php
include 'layout.php'?>
<br/><br/>
<?php
include 'navbar.php'?>
<br/>
<div height="200px" width="500px">
<p><h2 id="bus_header">SL1 - Logan Airport - South Station via Waterfront</h2></p>

<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">

<option value="option">Select a direction</option>

<option value="4i.php">Inbound</option>

<option value="4o.php">Outbound</option>

</select>
<br/>
<iframe src="7.php" width="850" height="450" id="bus_info">
</iframe>
<?php include 'footer.php'?>
</body>
</html>