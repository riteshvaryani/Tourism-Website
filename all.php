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
<b><h2 id='all'>All News</h2></b>

<?php
mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("news") or die(mysql_error());
$getnews=mysql_query("SELECT * FROM news ORDER BY date DESC " )  or die(mysql_error());
$count=0;
while($row=mysql_fetch_assoc($getnews))
{	
	
	$count++;
	$ref=$row['id']."news.php";
	$id =$row['id'];
	$title =$row['title'];
	$body =$row['body'];
	$date =$row['date'];
	echo "<a href=$ref>"."$title posted on $date<br/>	<hr>";
	
}

?>
</div>
<?php
include 'footer.php';
?>

</html>