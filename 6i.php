<html>
<body>
<link rel="stylesheet"
type="text/css"
href="css.css" />

<?php
include 'layout.php'?>
<div id="mid">
<img src="bus2.jpg " width=400px height=150px>
</div>

<br/><br/>
<?php
include 'navbar.php'?>
<br/>
<div height="200px" width="500px">
<p><h2 id="bus_header">SL5 - Dudley Station - Downtown Crossing at Temple Place via Washington St</h2></p>

<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">

<option value="option">Select a direction</option>

<option value="6i.php">Inbound</option>

<option value="6o.php">Outbound</option>

</select>
<br/>
<iframe src="11.php" width="850" height="450" id="bus_info">
</iframe>
<?php include 'footer.php'?>
</body>
</html>