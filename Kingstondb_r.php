<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database

if (mysql_query("CREATE DATABASE Kingston_r",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Kingston_r", $con);

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

mysql_select_db("Kingston_r", $con);

mysql_query("INSERT INTO `code` (`code_no`, `station_name`) VALUES
(10, 'Kingston'),
(11, 'Plymouth'),
(9, 'Halifax'),
(8, 'Hanson'),
(7, 'Whitman'),
(6, 'Abington'),
(5, 'South Weymouth'),
(4, 'Braintree'),
(3, 'Quincy Center'),
(2, 'JFK'),
(1,'South Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(003, 'South Station', '06:35:00'),
(033, 'South Station', '07:11:00'),
(005,'South Station','08:24:00'),
(061, 'South Station', '08:56:00'),
(007, 'South Station', '09:57:00'),
(063, 'South Station', '10:50:00'),
(009, 'South Station', '11:57:00'),
(065, 'South Station', '12:25:00'),
(015, 'South Station', '14:10:00'),
(041, 'South Station', '14:47:00'),
(017, 'South Station', '15:43:00'),
(043, 'South Station', '16:20:00'),
(019, 'South Station', '16:40:00'),
(045, 'South Station', '15:00:00'),
(021, 'South Station', '17:12:00'),
(047, 'South Station', '17:38:00'),
(023, 'South Station', '17:57:00'),
(067, 'South Station', '18:15:00'),
(025, 'South Station', '18:52:00'),
(051, 'South Station', '19:29:00'),
(027, 'South Station', '20:07:00'),
(055, 'South Station', '21:30:00'),
(029, 'South Station', '22:30:00')
");


mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(003, 'Quincy Center', '06:49:00'),
(003, 'Braintree', '06:55:00'),
(033, 'Braintree', '07:32:00'),
(033, 'South Weymouth', '07:39:00'),
(033, 'Abington', '07:44:00'),
(033, 'Whitman', '07:47:00'),
(033, 'Hanson', '07:57:00'),
(033, 'Halifax', '08:02:00'),
(033, 'Kingston', '08:12:00'),
(005, 'Braintree', '08:43:00'),
(005, 'South Weymouth', '09:23:00'),
(061, 'Quincy Center', '09:09:00'),
(061, 'Braintree', '09:15:00'),
(061, 'South Weymouth', '09:22:00'),
(061, 'Abington', '09:27:00'),
(061, 'Whitman', '09:31:00'),
(061, 'Hanson', '09:36:00'),
(061, 'Halifax', '09:41:00'),
(061, 'Kingston', '09:53:00'),
(061, 'Plymouth', '10:23:00'),
(007, 'Quincy Center', '10:10:00'),
(007, 'South Weymouth', '10:53:00'),
(063, 'Braintree', '11:08:00'),
(063, 'South Weymouth', '11:15:00'),
(063, 'Abington', '11:20:00'),
(063, 'Whitman', '11:24:00'),
(063, 'Hanson', '11:29:00'),
(063, 'Halifax', '11:34:00'),
(063, 'Plymouth', '11:47:00'),
(009, 'Quincy Center', '12:10:00'),
(009, 'South Weymouth', '12:53:00'),
(065, 'Braintree', '12:44:00'),
(065, 'South Weymouth', '12:51:00'),
(065, 'Abington', '12:57:00'),
(065, 'Whitman', '13:01:00'),
(065, 'Hanson', '13:06:00'),
(065, 'Halifax', '13:11:00'),
(065, 'Kingston', '13:23:00'),
(065, 'Plymouth', '13:52:00'),
(015, 'Quincy Center', '14:23:00'),
(015, 'South Weymouth', '15:10:00'),
(041, 'JKF', '14:53:00'),
(041, 'Braintree', '15:07:00'),
(041, 'South Weymouth', '15:14:00'),
(041, 'Abington', '15:19:00'),
(041, 'Whitman', '15:23:00'),
(041, 'Hanson', '15:28:00'),
(041, 'Halifax', '15:33:00'),
(041, 'Kingston', '15:45:00'),
(017, 'JKF', '15:49:00'),
(017, 'Quincy Center', '15:37:00'),
(017, 'South Weymouth', '16:41:00'),
(043, 'JKF', '16:26:00'),
(043, 'Braintree', '16:40:00'),
(043, 'South Weymouth', '16:47:00'),
(043, 'Abington', '16:52:00'),
(043, 'Whitman', '16:56:00'),
(043, 'Hanson', '17:01:00'),
(043, 'Halifax', '17:06:00'),
(043, 'Kingston', '17:18:00'),
(019, 'Quincy Center', '16:53:00'),
(019, 'South Weymouth', '17:38:00'),
(045, 'JKF', '17:06:00'),
(045, 'Braintree', '17:19:00'),
(045, 'South Weymouth', '17:26:00'),
(045, 'Abington', '17:31:00'),
(045, 'Whitman', '17:35:00'),
(045, 'Hanson', '17:40:00'),
(045, 'Halifax', '17:45:00'),
(045, 'Kingston', '17:57:00'),
(021, 'Quincy Center', '17:25:00'),
(021, 'South Weymouth', '18:10:00'),
(047, 'Quincy Center', '17:51:00'),
(047, 'Braintree', '17:57:00'),
(047, 'South Weymouth', '18:04:00'),
(047, 'Abington', '18:09:00'),
(047, 'Whitman', '18:13:00'),
(047, 'Hanson', '18:18:00'),
(047, 'Halifax', '18:23:00'),
(047, 'Kingston', '18:35:00'),
(023, 'JKF', '18:03:00'),
(023, 'Quincy Center', '18:11:00'),
(023, 'South Weymouth', '18:55:00'),
(067, 'Braintree', '18:33:00'),
(067, 'South Weymouth', '18:40:00'),
(067, 'Abington', '18:45:00'),
(067, 'Whitman', '18:48:00'),
(067, 'Hanson', '18:53:00'),
(067, 'Halifax', '18:58:00'),
(067, 'Kingston', '19:11:00'),
(067, 'Paymouth', '19:37:00'),
(025, 'Quincy Center', '19:05:00'),
(025, 'South Weymouth', '19:50:00'),
(051, 'Braintree', '19:47:00'),
(051, 'South Weymouth', '19:54:00'),
(051, 'Abington', '19:59:00'),
(051, 'Whitman', '20:03:00'),
(051, 'Hanson', '20:08:00'),
(051, 'Halifax', '20:13:00'),
(051, 'Kingston', '20:26:00'),
(027, 'JKF', '20:13:00'),
(027, 'Quincy Center', '20:21:00'),
(027, 'South Weymouth', '21:05:00'),
(055, 'JKF', '21:36:00'),
(055, 'Braintree', '21:48:00'),
(055, 'South Weymouth', '21:55:00'),
(055, 'Abington', '22:00:00'),
(055, 'Whitman', '22:03:00'),
(055, 'Hanson', '22:08:00'),
(055, 'Halifax', '22:13:00'),
(055, 'Kingston', '22:26:00'),
(029, 'Quincy Center', '22:43:00'),
(029, 'South Weymouth', '23:27:00')
");

echo "<br />";


mysql_close($con);

?>