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

<p><h2 id="bus_header">41 - Centre & Eliot Sts. - JFK/UMass Station via Dudley Sta., Centre St. & Jackson Sq. Sta.</h2></p>
<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">
<option value="option">Select a direction</option>

<option value="41i.php">Inbound</option>

<option value="41o.php">Outbound</option>

</select>
<br/>
<iframe src="82.php" width="850" height="450" id="bus_info">
</iframe>

<?php include 'footer.php'?>
</body>
</html>