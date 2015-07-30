<html>
<body>
<?php

mysql_connect("localhost","root","") or die(mysql_error());
include 'Haverhill.php';
$name=$_POST['select'];
$b=$_POST['bound'];
if($b=='inbound')
{
	$database=$db;
}
else
{
	$database=$db_r;
}

	mysql_select_db($database) or die(mysql_error());
	echo "<center>";
	echo "<b>"."All the train information is as follow"."</b>";
 echo "<br/>";
 if($b=='inbound')
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
			$t=$row['train_no'];
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
					echo "<td>".$row['time']."</td>";
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
		//echo $j;
		//echo "<br />";
		$result=mysql_query("SELECT train_no,source FROM main WHERE source IN(SELECT source FROM code,main WHERE station_name=source and code_no<='".$j."')");
		while($row = mysql_fetch_array($result))
		{
			echo "<center>";
			//echo "Train number is:";
			$t=$row['train_no'];
			//echo $t;
			$s=$row['source'];
			if($s==$name)
			{
				$r=mysql_query("SELECT * FROM main WHERE train_no='".$t."'");
				while($row = mysql_fetch_array($r))
				{
  
					//echo "<center>";
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


</body>
</html>
