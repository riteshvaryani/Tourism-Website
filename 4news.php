<html>
<head>

<link rel="stylesheet"
type="text/css"
href="css.css" />

</head>
<?php
include 'layout.php'?>
<br/>
<?php
include 'navbar.php'?>
<body>
<script type="text/javascript"
src="j.js">
</script>

<div id="margin">
<?php
 mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("news") or die(mysql_error());
 $getnews=mysql_query("SELECT * FROM news WHERE id=6" )  or die(mysql_error());
$row=mysql_fetch_assoc($getnews);
$id =$row['id'];
$title =$row['title'];
$body =$row['body'];
$date =$row['date'];
echo "<br/>";
echo "<h2 >";
echo "$title <br/>";
echo "</h2>";
echo "<br/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Posted on "."$date <br/>";
echo "<br/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo " $body <br/>";
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
?>
</div>
<?php
include 'footer.php';
?>

</html>