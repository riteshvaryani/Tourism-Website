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

<p><h2 id="bus_header">SL4 - Dudley Station - South Station at Essex Street via Washington St</h2></p>
<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">
<option value="option">Select a direction</option>

<option value="46i.php">Inbound</option>

<option value="46o.php">Outbound</option>

</select>
<br/>
<iframe src="91.php" width="850" height="450" id="bus_info">
</iframe>

<?php include 'footer.php'?>
</body>
</html>