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

<p><h2 id="bus_header">34 - Walpole Center or Dedham Line - Forest Hills Sta. via Washington St.</h2></p>
<select name="direction" ONCHANGE="location = this.options[this.selectedIndex].value;" id="io">
<option value="option">Select a direction</option>

<option value="33i.php">Inbound</option>

<option value="33o.php">Outbound</option>

</select>
<br/>
<iframe src="65.php" width="850" height="450" id="bus_info">
</iframe>

<?php include 'footer.php'?>
</body>
</html>