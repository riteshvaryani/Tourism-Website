<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE Franklin",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Franklin", $con);

$sql ="CREATE TABLE code (
  `code_no` int(11) NOT NULL,
  `station_name` varchar(20) NOT NULL
) ";

mysql_query($sql,$con);
$sql ="CREATE TABLE main(
`train_no` int(11),
`source` varchar(20),
`time` time
)";
mysql_query($sql,$con);

$sql="CREATE TABLE sub(
`train_no` int(11),
`station_name` varchar(20),
`time` time
)";
mysql_query($sql,$con);

mysql_query("INSERT INTO `code` (`code_no`, `station_name`) VALUES
(1, 'Forge Park'),
(2, 'Franklin'),
(3, 'Norfolk'),
(4, 'Walpole'),
(5, 'Plimptonville'),
(6, 'Windsor Gardens'),
(7, 'Norwood Central'),
(8, 'Norwood Depot'),
(9, 'Islington'),
(10, 'Dedham Corp.Center'),
(11, 'Endicott'),
(12, 'Readville'),
(13,'Hyde Park'),
(14,'Ruggles'),
(15, 'Back Bay'),
(16, 'South Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(790, 'Forge Park', '05:05:00'),
(702, 'Forge Park', '05:40:00'),
(704, 'Forge Park', '06:05:00'),
(706, 'Forge Park', '06:35:00'),
(708, 'Forge Park', '07:00:00'),
(732, 'Walpole', '07:54:00'),
(710, 'Forge Park', '07:45:00'),
(734, 'Norwood Central', '08:45:00'),
(712, 'Forge Park', '09:03:00'),
(714, 'Forge Park', '10:45:00'),
(716, 'Forge Park', '12:05:00'),
(718, 'Forge Park', '14:05:00'),
(720, 'Forge Park', '16:00:00'),
(736, 'Norwood Central', '17:22:00'),
(796, 'Forge Park', '17:36:00'),
(798, 'Forge Park', '19:40:00'),
(726, 'Forge Park', '20:50:00'),
(728, 'Forge Park', '22:15:00')
");

mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(790, 'Franklin', '05:10:00'),
(790, 'Norfolk', '05:19:00'),
(790, 'Walpole', '05:25:00'),
(790, 'Windsor Gardens', '05:29:00'),
(790, 'Norwood Central', '05:33:00'),
(790, 'Norwood Depot', '05:36:00'),
(790, 'Islington', '05:39:00'),
(790, 'Dedham Corp.Center', '05:42:00'),
(790, 'Endicott', '05:45:00'),
(790, 'South Station', '06:15:00'),
(702, 'Franklin', '05:47:00'),
(702, 'Norfolk', '05:54:00'),
(702, 'Walpole', '06:00:00'),
(702, 'Windsor Gardens', '06:07:00'),
(702, 'Norwood Central', '06:12:00'),
(702, 'Norwood Depot', '06:15:00'),
(702, 'Islington', '06:18:00'),
(702, 'Dedham Corp.Center', '06:21:00'),
(702, 'Endicott', '06:25:00'),
(702, 'Readville', '06:28:00'),
(702, 'Hyde Park', '06:32:00'),
(702,'Back Bay','06:45:00'),
(702, 'South Station', '06:50:00'),
(704, 'Franklin', '06:12:00'),
(704, 'Norfolk', '06:19:00'),
(704, 'Walpole', '06:25:00'),
(704, 'Windsor Gardens', '06:29:00'),
(704, 'Norwood Central', '06:33:00'),
(704, 'Norwood Depot', '06:37:00'),
(704, 'Islington', '06:40:00'),
(704, 'Dedham Corp.Center', '06:43:00'),
(704, 'Endicott', '06:46:00'),
(704, 'Readville', '06:49:00'),
(704, 'Ruggles', '07:00:00'),
(704, 'Back Bay', '07:04:00'),
(704, 'South Station', '07:09:00'),
(706, 'Franklin', '06:42:00'),
(706, 'Norfolk', '06:49:00'),
(706, 'Walpole', '06:55:00'),
(706,'Plimptonville','06:58:00'),
(706, 'Windsor Gardens', '07:01:00'),
(706, 'Norwood Central', '07:06:00'),
(706, 'Norwood Depot', '07:09:00'),
(706, 'Islington', '07:12:00'),
(706, 'Dedham Corp.Center', '07:16:00'),
(706, 'Endicott', '07:20:00'),
(706, 'Readville', '07:23:00'),
(706, 'Ruggles', '07:34:00'),
(706, 'Back Bay', '07:38:00'),
(706, 'South Station', '07:43:00'),
(708, 'Franklin', '07:07:00'),
(708, 'Norfolk', '07:14:00'),
(708, 'Walpole', '07:21:00'),
(708, 'Windsor Gardens', '07:25:00'),
(708, 'Norwood Central', '07:30:00'),
(708, 'Dedham Corp.Center', '07:35:00'),
(708, 'Ruggles', '07:50:00'),
(708, 'Back Bay', '07:54:00'),
(708, 'South Station', '07:59:00'),
(732, 'Windsor Gardens', '07:58:00'),
(732, 'Norwood Central', '08:02:00'),
(732, 'Norwood Depot', '08:05:00'),
(732, 'Islington', '08:08:00'),
(732, 'Dedham Corp.Center', '08:11:00'),
(732, 'Endicott', '08:15:00'),
(732, 'Readville', '08:19:00'),
(732, 'Back Bay', '08:35:00'),
(732, 'South Station', '08:40:00'),
(710, 'Franklin', '07:52:00'),
(710, 'Norfolk', '07:59:00'),
(710, 'Walpole', '08:05:00'),
(710, 'Windsor Gardens', '08:09:00'),
(710, 'Norwood Central', '08:14:00'),
(710, 'Norwood Depot', '08:17:00'),
(710, 'Islington', '08:20:00'),
(710, 'Dedham Corp.Center', '08:23:00'),
(710, 'Endicott', '08:27:00'),
(710, 'Readville', '08:31:00'),
(710, 'Ruggles', '08:44:00'),
(710, 'Back Bay', '08:49:00'),
(710, 'South Station', '08:54:00'),
(734, 'Norwood Depot', '08:47:00'),
(734, 'Islington', '08:50:00'),
(734, 'Dedham Corp.Center', '08:52:00'),
(734, 'Endicott', '08:54:00'),
(734, 'Readville', '08:59:00'),
(734, 'Back Bay', '09:20:00'),
(734, 'South Station', '09:25:00'),
(712, 'Franklin', '09:10:00'),
(712, 'Norfolk', '09:17:00'),
(712, 'Walpole', '09:24:00'),
(712, 'Windsor Gardens', '09:29:00'),
(712, 'Norwood Central', '09:33:00'),
(712, 'Norwood Depot', '09:35:00'),
(712, 'Islington', '09:39:00'),
(712, 'Dedham Corp.Center', '09:42:00'),
(712, 'Endicott', '09:44:00'),
(712, 'Readville', '09:47:00'),
(712, 'Ruggles', '09:59:00'),
(712, 'Back Bay', '10:03:00'),
(712, 'South Station', '10:08:00'),
(714, 'Franklin', '10:52:00'),
(714, 'Norfolk', '10:59:00'),
(714, 'Walpole', '11:06:00'),
(714, 'Windsor Gardens', '11:11:00'),
(714, 'Norwood Central', '11:15:00'),
(714, 'Norwood Depot', '11:17:00'),
(714, 'Islington', '11:21:00'),
(714, 'Dedham Corp.Center', '11:24:00'),
(714, 'Endicott', '11:26:00'),
(714, 'Readville', '11:29:00'),
(714, 'Ruggles', '11:39:00'),
(714, 'Back Bay', '11:43:00'),
(714, 'South Station', '11:48:00'),
(716, 'Franklin', '12:12:00'),
(716, 'Norfolk', '12:19:00'),
(716, 'Walpole', '12:26:00'),
(716, 'Windsor Gardens', '12:31:00'),
(716, 'Norwood Central', '12:35:00'),
(716, 'Norwood Depot', '12:37:00'),
(716, 'Islington', '12:41:00'),
(716, 'Dedham Corp.Center', '12:44:00'),
(716, 'Endicott', '12:46:00'),
(716, 'Readville', '12:49:00'),
(716, 'Ruggles', '12:57:00'),
(716, 'Back Bay', '13:01:00'),
(716, 'South Station', '13:06:00'),
(718, 'Franklin', '14:12:00'),
(718, 'Norfolk', '14:19:00'),
(718, 'Walpole', '14:26:00'),
(718, 'Windsor Gardens', '14:31:00'),
(718, 'Norwood Central', '14:35:00'),
(718, 'Norwood Depot', '14:37:00'),
(718, 'Islington', '14:41:00'),
(718, 'Dedham Corp.Center', '14:44:00'),
(718, 'Endicott', '14:46:00'),
(718, 'Readville', '14:49:00'),
(718, 'Back Bay', '15:00:00'),
(718, 'South Station', '15:05:00'),
(720, 'Franklin', '16:07:00'),
(720, 'Norfolk', '16:14:00'),
(720, 'Walpole', '16:20:00'),
(720, 'Windsor Gardens', '16:24:00'),
(720, 'Norwood Central', '16:28:00'),
(720, 'Norwood Depot', '16:31:00'),
(720, 'Islington', '16:36:00'),
(720, 'Dedham Corp.Center', '16:40:00'),
(720, 'Endicott', '16:44:00'),
(720, 'Readville', '16:48:00'),
(720, 'Back Bay', '17:03:00'),
(720, 'South Station', '17:08:00'),
(736, 'Dedham Corp.Center', '17:40:00'),
(736, 'South Station', '18:05:00'),
(796, 'Franklin', '17:43:00'),
(796, 'Norfolk', '17:49:00'),
(796, 'Walpole', '17:56:00'),
(796, 'Windsor Gardens', '18:01:00'),
(796, 'Norwood Central', '18:05:00'),
(796, 'Norwood Depot', '18:07:00'),
(796, 'Islington', '18:11:00'),
(796, 'Dedham Corp.Center', '18:14:00'),
(796, 'Endicott', '18:17:00'),
(796, 'South Station', '18:50:00'),
(798, 'Franklin', '19:47:00'),
(798, 'Norfolk', '19:53:00'),
(798, 'Walpole', '20:00:00'),
(798, 'Norwood Central', '20:07:00'),
(798, 'Dedham Corp.Center', '20:16:00'),
(798, 'South Station', '20:45:00'),
(726, 'Franklin', '20:57:00'),
(726, 'Norfolk', '21:03:00'),
(726, 'Walpole', '21:09:00'),
(726, 'Norwood Central', '21:16:00'),
(726,'Norwood Depot','21:18:00'),
(726,'Islington','21:22:00'),
(726, 'Dedham Corp.Center', '21:25:00'),
(726,'Endicott','21:27:00'),
(726,'Back Bay','21:40:00'),
(726, 'South Station', '21:45:00'),
(728, 'Franklin', '22:22:00'),
(728, 'Walpole', '22:33:00'),
(728, 'Norwood Central', '22:39:00'),
(728, 'Dedham Corp.Center', '22:44:00'),
(728, 'Back Bay', '23:01:00'),
(728, 'South Station', '23:06:00')
");

echo "<br />";


mysql_close($con);

?>