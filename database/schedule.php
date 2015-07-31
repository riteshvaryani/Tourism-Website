<html>
<body>

<?php

include 'Fitchburg.php';
 $database= $db;
 //echo "$code";
 //$name=$_POST['code'];
// echo $name;
 //echo $database;
 //echo "<br />";
 mysql_connect("localhost","root","") or die(mysql_error());
// mysql_select_db($database) or die(mysql_error());
 $name=$_POST['select'];
 //echo $name;
 //echo "<br />";
 $bound=$_POST['bound'];
 //echo $bound;
 //echo "<br />";
 if($bound=='outbound')
 {
	$database=$db_r;
 }
	//echo $database;
	//echo "<br />";
	mysql_select_db($database) or die(mysql_error());
	echo "All the train information is as follow";
 //echo "<br/>";
 if($bound='inbound')
 {
	$i=mysql_query("SELECT code_no FROM code WHERE station_name='".$name."'");
	$j=" ";
	while($row = mysql_fetch_array($i))
	{
		$j= $row['code_no'] ;
	}
	//echo $j;
	//echo "<br />";
	$result=mysql_query("SELECT train_no,source FROM main WHERE source IN(SELECT source FROM code,main WHERE station_name=source and code_no<='".$j."')");
	while($row = mysql_fetch_array($result))
	{
		echo "<center>";
		echo "Train number is:";
		$t=$row['train_no'];
		echo $t;
		// echo "hiii";
		//$r=mysql_query("SELECT source FROM main WHERE train_no='".$t."'");
		//$row = mysql_fetch_array($r);
		$s=$row['source'];
		if($s==$name)
		{
			$r=mysql_query("SELECT * FROM main WHERE train_no='".$t."'");
			while($row = mysql_fetch_array($r))
			{
				echo "<center>";
				echo "<table border =1 >";
				echo "<tr>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['time']."<td>";
				echo "</tr>";
				//echo "<br />";
			}
			$r=mysql_query("SELECT * FROM sub WHERE train_no='".$t."'");
			while($row = mysql_fetch_array($r))
			{
				echo "<tr>";
				echo "<td>".$row['station_name']."</td>";
				echo "<td>".$row['time']."</td>";
				echo "<tr>";
				
				//echo "<br />";
			}
			echo "</table>";
		}
		else
		{
  
			$r=mysql_query("SELECT * FROM sub WHERE train_no='".$t."'ORDER BY time ASC");
			$count=0;
			while($row = mysql_fetch_array($r))
			{
   
				$z=$row['station_name'];
				if($z==$name)
				{	
					$count=1;
					echo "<center>";
					echo "<table border =1 >";
	                echo "<tr>";
					echo "<td>".$row['station_name']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "</tr>";
					//echo "<br />";
				}
				elseif($count==1)
				{
					echo "<tr>";
					echo "<td>".$row['station_name']."</td >";
					echo "<td>".$row['time']."<td>";
					echo "</tr>";
					
					//echo "<br />";
				}
				
			}
			echo "</table>";
		}
  
		echo "<br />";
	}
}
else
{
		$i=mysql_query("SELECT code_no FROM code WHERE station_name='".$name."'");
	$j=" ";
	while($row = mysql_fetch_array($i))
	{
		$j= $row['code_no'] ;
	}
	echo $j;
	echo "<br />";
	$result=mysql_query("SELECT train_no,source FROM main WHERE source IN(SELECT source FROM code,main WHERE station_name=source and code_no<='".$j."')");
	while($row = mysql_fetch_array($result))
	{
		$t=$row['train_no'];
		echo $t;
		// echo "hiii";
		//$r=mysql_query("SELECT source FROM main WHERE train_no='".$t."'");
		//$row = mysql_fetch_array($r);
		$s=$row['source'];
		if($s==$name)
		{
			$r=mysql_query("SELECT * FROM main WHERE train_no='".$t."'");
			while($row = mysql_fetch_array($r))
			{
  
				echo "<center>";
				echo "<table border =1 >";
				echo "<tr>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['time']."<td>";
				echo "</tr>";
				//echo "<br />";
			}
			$r=mysql_query("SELECT * FROM sub WHERE train_no='".$t."'");
			while($row = mysql_fetch_array($r))
			{
  
				echo "<tr>";
				echo "<td>".$row['station_name']."</td>";
				echo "<td>".$row['time']."</td>";
				echo "<tr>";
				
				//echo "<br />";
			}
			echo "</table>";
		}
		else
		{
  
			$r=mysql_query("SELECT * FROM sub WHERE train_no='".$t."'ORDER BY time ASC");
			$count=0;
			while($row = mysql_fetch_array($r))
			{
   
				$z=$row['station_name'];
				if($z==$name)
				{	
					$count=1;
					echo "<center>";
					echo "<table border =1 >";
	                echo "<tr>";
					echo "<td>".$row['station_name']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "</tr>";
					//echo "<br />";				
				}
				elseif($count==1)
				{
					echo "<tr>";
					echo "<td>".$row['station_name']."</td >";
					echo "<td>".$row['time']."<td>";
					echo "</tr>";
					
					//echo "<br />";
				}
			}
			echo "</table>";
		}
  
		echo "<br />";
	}
}
 ?>
<?php include 'footer.php'?>
</body>
</html>
