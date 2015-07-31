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

<p><h2 id="bus_header">19 - Fields Corner Sta. - Kenmore or Ruggles Sta. via Grove Hall & Dudley Station</h2></p>
<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">
<option value="option">Select a direction</option>

<option value="20i.php">Inbound</option>

<option value="20o.php">Outbound</option>

</select>
<br/>
<iframe src="39.php" width="850" height="450" id="bus_info">
</iframe>

<?php include 'footer.php'?>
</body>
</html>