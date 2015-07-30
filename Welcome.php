<html>
<body>
 <?php
 $x= $_POST["dom-int"];
 $y= $_POST["arr-dep"];
 $z= $_POST["days"];
if( $x=="Domestic")
{
	if($y=="Arrival")
		if($z=="Weekdays")
			echo "domestic arrival weekdays";
		else
			echo "domestic arrival weekends";
	else 
		if($z=="Weekdays")
			echo "domestic departure weekdays";
		else
			echo "domestic departure weekends";
}
else
{
	if($y=="Arrival")
		if($z=="Weekdays")
			echo "international arrival weekdays";
		else
			echo "international arrival weekends";
	else 
		if($z=="Weekdays")
			echo "international departure weekdays";
		else
			echo "international departure weekends";
}
	
?>

</body>
</html>