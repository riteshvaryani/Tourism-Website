<html>
<body>

<hr>
<?php
 mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("news") or die(mysql_error());
$getnews=mysql_query("SELECT * FROM news ORDER BY date DESC " )  or die(mysql_error());
$count=0;
while($row=mysql_fetch_assoc($getnews))
{	
	if($count<3)
	{
	$count++;
	$ref=$row['id']."news.php";
	$id =$row['id'];
	$title =$row['title'];
	$body =$row['body'];
	$date =$row['date'];
	echo "<a href=$ref>"."$title posted on $date<br/>	<hr>";
	}
	else
		break;
}

?>
<a href='all.php'>see all>></a>
</body>
</html>