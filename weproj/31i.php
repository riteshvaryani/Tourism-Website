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

<p><h2 id="bus_header">32 - Wolcott Sq. or Cleary Sq. - Forest Hills Sta. via Hyde Park Ave.</h2></p>
<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">
<option value="option">Select a direction</option>

<option value="31i.php">Inbound</option>

<option value="32o.php">Outbound</option>

</select>
<br/>
<iframe src="61.php" width="850" height="450" id="bus_info">
</iframe>

<?php include 'footer.php'?>
</body>
</html>