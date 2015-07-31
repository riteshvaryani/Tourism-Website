<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE train",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("train", $con);

$sql ="CREATE TABLE routes (
  `id_route` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_route`)
) ";

mysql_query($sql,$con);

mysql_query("INSERT INTO routes (`id_route`, `name`) VALUES
(1, 'Hastings - Basingstoke'),
(2, 'Sussex - Kent')");

$sql ="CREATE TABLE schedule (
  `id_route` int(11) NOT NULL,
  `id_stop` int(11) NOT NULL,
  `time` time NOT NULL,
  `days` varchar(25) NOT NULL
)"; 
mysql_query($sql,$con);

mysql_query("INSERT INTO `schedule` (`id_route`, `id_stop`, `time`, `days`) VALUES
(1, 1, '05:00:00', 'all'),
(1, 1, '06:00:00', 'all'),
(1, 1, '09:35:00', 'all but weekdays'),
(1, 2, '07:00:00', 'all'),
(1, 2, '08:00:00', 'all'),
(1, 2, '11:35:00', 'all but weekdays'),
(1, 3, '07:30:00', 'all'),
(1, 3, '08:30:00', 'all'),
(1, 3, '12:05:00', 'all but weekdays'),
(1, 4, '08:00:00', 'all'),
(1, 4, '09:00:00', 'all'),
(1, 4, '12:35:00', 'all but weekdays'),
(2, 1, '05:00:00', 'all'),
(2, 1, '06:22:00', 'all'),
(2, 1, '10:50:00', 'all'),
(2, 2, '06:00:00', 'all'),
(2, 2, '07:22:00', 'all'),
(2, 2, '11:50:00', 'all'),
(2, 3, '12:20:00', 'all'),
(2, 3, '13:22:00', 'all'),
(2, 3, '17:50:00', 'all'),
(2, 4, '14:20:00', 'all'),
(2, 4, '15:22:00', 'all'),
(2, 4, '19:50:00', 'all')");

$sql ="CREATE TABLE stops (
  `id_route` int(11) NOT NULL,
  `id_stop` int(11) NOT NULL,
  `stop` varchar(50) NOT NULL
)"; 

mysql_query($sql,$con);

mysql_query("INSERT INTO `stops` (`id_route`, `id_stop`, `stop`) VALUES
(1, 1, 'Basingstoke '),
(1, 2, 'Bournemouth'),
(1, 3, 'Dorset'),
(1, 4, 'Hastings'),
(2, 1, 'Kent'),
(2, 2, 'Poole'),
(2, 3, 'Portsmouth'),
(2, 4, 'Sussex ')");

echo "<br />";

$result=mysql_query("SELECT r.name as name, startingstop.stop as source,t.time as time,endingstop.stop as destination FROM stops startingstop, stops endingstop, routes r, schedule t
WHERE
startingstop.stop = 'Hastings'
AND endingstop.stop ='Bournemouth'
AND r.id_route=startingstop.id_route
AND startingstop.id_route=t.id_route
AND startingstop.id_stop=t.id_stop
AND startingstop.id_stop > endingstop.id_stop
ORDER BY t.time ASC");

while($row = mysql_fetch_array($result))
  {
  echo $row['name'] . " " . $row['source']." ". $row['time'] . " " . $row['destination'];
  echo "<br />";
  }

mysql_close($con);

?>