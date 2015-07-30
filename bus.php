<html>
<body>
<link rel="stylesheet"
type="text/css"
href="css.css" />

<?php
include 'layout.php'?>
<br/><br/>
<div id="mid">
<img src="bus.jpg " width=400px height=225px style="margin-top:-1cm">
</div>
<br />
<br/>
<?php
include 'navbar.php'?>
<br/>
<br/>
<p id="select_bus">Select a Bus to see Schedule Information:</p>
<div  id="bus" width="750" height="450">
<?php
include '100.php'
?>
</div>
<!--<iframe src="100.php" width="750" height="450">
</iframe>-->
<?php include 'footer.php'?>
</body>
</html>