<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database

if (mysql_query("CREATE DATABASE Kingston",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Kingston", $con);

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

mysql_select_db("Kingston", $con);

mysql_query("INSERT INTO `code` (`code_no`, `station_name`) VALUES
(1, 'Kingston'),
(2, 'Plymouth'),
(3, 'Halifax'),
(4, 'Hanson'),
(5, 'Whitman'),
(6, 'Abington'),
(7, 'South Weymouth'),
(8, 'Braintree'),
(9, 'Quincy Center'),
(10, 'JFK'),
(11,'South Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(002, 'South Weymouth', '05:20:00'),
(032, 'Kingston', '05:32:00'),
(004,'South Weymouth','06:00:00'),
(034, 'Kingston', '06:19:00'),
(006, 'South Weymouth', '06:58:00'),
(036, 'Kingston', '07:11:00'),
(008, 'South Weymouth', '07:20:00'),
(038, 'Kingston', '07:37:00'),
(010, 'South Weymouth', '08:07:00'),
(040, 'Kingston', '08:37:00'),
(012, 'South Weymouth', '09:38:00'),
(060, 'Kingston', '10:05:00'),
(014, 'South Weymouth', '11:10:00'),
(062, 'Kingston', '12:00:00'),
(016, 'South Weymouth', '13:08:00'),
(064, 'Kingston', '13:35:00'),
(018, 'South Weymouth', '15:25:00'),
(048, 'Kingston', '16:02:00'),
(020, 'South Weymouth', '16:54:00'),
(022, 'South Weymouth', '18:05:00'),
(052, 'Kingston', '18:27:00'),
(066, 'Kingston', '19:23:00'),
(056, 'Kingston', '20:53:00')
");


mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(002, 'Braintree', '05:56:00'),
(002, 'JKF', '06:10:00'),
(002, 'South Station', '06:17:00'),
(032, 'Halifax', '05:42:00'),
(032, 'Hanson', '05:47:00'),
(032, 'Whitman', '05:52:00'),
(032, 'Abington', '05:56:00'),
(032, 'South Weymouth', '06:01:00'),
(032, 'JKF', '06:21:00'),
(032, 'South Station', '06:29:00'),
(004, 'Quincy Center', '06:42:00'),
(004, 'South Station', '06:58:00'),
(034, 'Halifax', '06:29:00'),
(034, 'Hanson', '06:34:00'),
(034, 'Whitman', '06:39:00'),
(034, 'Abington', '06:43:00'),
(034, 'South Weymouth', '06:49:00'),
(034, 'Braintree', '06:57:00'),
(034, 'South Station', '07:17:00'),
(006, 'Quincy Center', '07:39:00'),
(006, 'JKF', '07:48:00'),
(006, 'South Station', '07:56:00'),
(036, 'Halifax', '07:21:00'),
(036, 'Hanson', '07:26:00'),
(036, 'Whitman', '07:31:00'),
(036, 'Abington', '07:35:00'),
(036, 'South Weymouth', '07:42:00'),
(036, 'Braintree', '07:50:00'),
(036, 'JKF', '08:03:00'),
(036, 'South Station', '08:10:00'),
(008, 'Quincy Center', '08:01:00'),
(008, 'JKF', '08:11:00'),
(008, 'South Station', '08:18:00'),
(038, 'Halifax', '07:47:00'),
(038, 'Hanson', '07:52:00'),
(038, 'Whitman', '07:57:00'),
(038, 'Abington', '08:01:00'),
(038, 'South Weymouth', '08:06:00'),
(038, 'Braintree', '08:14:00'),
(038, 'JKF', '08:28:00'),
(038, 'South Station', '08:35:00'),
(010, 'Braintree', '08:44:00'),
(010, 'JKF', '08:58:00'),
(010, 'South Station', '09:05:00'),
(040, 'Halifax', '08:47:00'),
(040, 'Hanson', '08:52:00'),
(040, 'Whitman', '08:57:00'),
(040, 'Abington', '09:01:00'),
(040, 'South Weymouth', '09:06:00'),
(040, 'Braintree', '09:14:00'),
(040, 'JKF', '09:28:00'),
(040, 'South Station', '09:35:00'),
(012, 'Quincy Center', '10:20:00'),
(012, 'South Station', '10:36:00'),
(060, 'Plymouth', '10:48:00'),
(060, 'Halifax', '10:58:00'),
(060, 'Hanson', '11:03:00'),
(060, 'Whitman', '11:08:00'),
(060, 'Abington', '11:12:00'),
(060, 'South Weymouth', '11:20:00'),
(060, 'Braintree', '11:27:00'),
(060, 'South Station', '11:46:00'),
(014, 'Quincy Center', '11:51:00'),
(014, 'South Station', '12:07:00'),
(062, 'Plymouth', '12:06:00'),
(062, 'Halifax', '12:16:00'),
(062, 'Hanson', '12:21:00'),
(062, 'Whitman', '12:26:00'),
(062, 'Abington', '12:30:00'),
(062, 'South Weymouth', '12:37:00'),
(062, 'Braintree', '12:45:00'),
(062, 'JKF', '12:58:00'),
(062, 'South Station', '13:05:00'),
(016, 'Braintree', '13:45:00'),
(016, 'Quincy Center', '13:50:00'),
(016, 'South Station', '14:07:00'),
(064, 'Plymouth', '14:28:00'),
(064, 'Halifax', '14:38:00'),
(064, 'Hanson', '14:43:00'),
(064, 'Whitman', '14:48:00'),
(064, 'Abington', '14:52:00'),
(064, 'South Weymouth', '14:57:00'),
(064, 'Braintree', '15:05:00'),
(064, 'South Station', '15:26:00'),
(018, 'Braintree', '16:03:00'),
(018, 'South Station', '16:24:00'),
(048, 'Halifax', '16:12:00'),
(048, 'Hanson', '16:17:00'),
(048, 'Whitman', '16:22:00'),
(048, 'Abington', '16:26:00'),
(048, 'South Weymouth', '16:31:00'),
(048, 'Braintree', '16:38:00'),
(048, 'South Station', '16:59:00'),
(020, 'Braintree', '17:31:00'),
(020, 'South Station', '18:06:00'),
(022, 'Braintree', '18:48:00'),
(022, 'South Station', '19:15:00'),
(052, 'Halifax', '18:40:00'),
(052, 'Hanson', '18:45:00'),
(052, 'Whitman', '18:55:00'),
(052, 'Abington', '18:58:00'),
(052, 'South Weymouth', '19:03:00'),
(052, 'Braintree', '19:11:00'),
(052, 'South Station', '19:28:00'),
(066, 'Plymouth', '19:45:00'),
(066, 'Halifax', '19:55:00'),
(066, 'Hanson', '20:00:00'),
(066, 'Whitman', '20:08:00'),
(066, 'Abington', '20:12:00'),
(066, 'South Weymouth', '20:17:00'),
(066, 'Braintree', '20:25:00'),
(066, 'South Station', '20:45:00'),
(056, 'Halifax', '21:03:00'),
(056, 'Hanson', '21:08:00'),
(056, 'Whitman', '21:13:00'),
(056, 'Abington', '21:17:00'),
(056, 'South Weymouth', '21:22:00'),
(056, 'Braintree', '21:29:00'),
(056, 'South Station', '21:49:00')
");

echo "<br />";


mysql_close($con);

?>