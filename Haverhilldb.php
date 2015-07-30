<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database

if (mysql_query("CREATE DATABASE Haverhill",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Haverhill", $con);

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
(1, 'Haverhill'),
(2, 'Bradford'),
(3, 'Lawrence'),
(4, 'Andover'),
(5, 'Ballardvale'),
(6, 'North Wilmington'),
(7, 'Reading'),
(8, 'Wakefield'),
(9, 'Greenwood'),
(10, 'Melrose Highlands'),
(11, 'Melrose Cedar Park'),
(12, 'Wyoming Hill'),
(13, 'Malden Center'),
(14, 'North Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(202, 'Haverhill', '05:05:00'),
(204, 'Haverhill', '05:38:00'),
(206, 'Haverhill', '06:10:00'),
(208, 'Haverhill', '06:46:00'),
(258, 'Reading', '07:30:00'),
(212, 'Haverhill', '07:30:00'),
(262, 'Reading', '08:30:00'),
(214, 'Haverhill', '09:05:00'),
(266, 'Reading', '10:05:00'),
(218, 'Haverhill', '10:00:00'),
(220, 'Haverhill', '12:00:00'),
(222, 'Andover', '13:25:00'),
(274, 'Reading', '15:00:00'),
(226, 'Haverhill', '14:40:00'),
(280, 'Reading', '16:32:00'),
(232, 'Haverhill', '16:30:00'),
(282, 'Reading', '17:35:00'),
(284, 'Reading', '18:38:00'),
(236, 'Haverhill', '18:25:00'),
(288, 'Reading', '20:00:00'),
(238, 'Haverhill', '20:35:00')
");

mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(202, 'Bradford', '05:08:00'),
(202, 'Lawrence', '05:19:00'),
(202, 'Andover', '05:24:00'),
(202, 'Ballardvale', '05:30:00'),
(202, 'North Wilmington', '05:37:00'),
(202, 'Reading', '05:44:00'),
(202, 'Wakefield', '05:50:00'),
(202, 'Greenwood', '05:53:00'),
(202, 'Melrose Highlands', '05:55:00'),
(202, 'Melrose Cedar Park', '05:57:00'),
(202, 'Wyoming Hill', '05:59:00'),
(202, 'Malden Center', '06:02:00'),
(202, 'North Station', '06:14:00'),
(204, 'Bradford', '05:41:00'),
(204, 'Lawrence', '05:52:00'),
(204, 'Andover', '05:57:00'),
(204, 'Ballardvale', '06:03:00'),
(204, 'North Wilmington', '06:11:00'),
(204, 'Reading', '06:19:00'),
(204, 'Wakefield', '06:25:00'),
(204, 'Greenwood', '06:28:00'),
(204, 'Melrose Highlands', '06:30:00'),
(204, 'Melrose Cedar Park', '06:32:00'),
(204, 'Wyoming Hill', '06:34:00'),
(204, 'Malden Center', '06:38:00'),
(204, 'North Station', '06:50:00'),
(206, 'Bradford', '06:13:00'),
(206, 'Lawrence', '06:24:00'),
(206, 'Andover', '06:29:00'),
(206, 'Ballardvale', '06:35:00'),
(206, 'North Wilmington', '06:43:00'),
(206, 'Reading', '06:51:00'),
(206, 'Wakefield', '06:57:00'),
(206, 'Greenwood', '07:00:00'),
(206, 'Melrose Highlands', '07:03:00'),
(206, 'Melrose Cedar Park', '07:05:00'),
(206, 'Wyoming Hill', '07:07:00'),
(206, 'Malden Center', '07:11:00'),
(206, 'North Station', '07:25:00'),
(208, 'Bradford', '06:46:00'),
(208, 'Lawrence', '06:49:00'),
(208, 'Andover', '07:00:00'),
(208, 'Ballardvale', '07:06:00'),
(208, 'North Wilmington', '07:12:00'),
(208, 'Reading', '07:22:00'),
(208, 'North Station', '07:48:00'),
(258, 'Wakefield', '07:36:00'),
(258, 'Greenwood', '07:39:00'),
(258, 'Melrose Highlands', '07:42:00'),
(258, 'Melrose Cedar Park', '07:44:00'),
(258, 'Wyoming Hill', '07:46:00'),
(258, 'Malden Center', '07:50:00'),
(258, 'North Station', '08:00:00'),
(212, 'Bradford', '07:33:00'),
(212, 'Lawrence', '07:44:00'),
(212, 'Andover', '07:51:00'),
(212, 'Ballardvale', '07:57:00'),
(212, 'North Wilmington', '08:07:00'),
(212, 'Reading', '08:12:00'),
(212, 'North Station', '08:39:00'),
(262, 'Wakefield', '08:36:00'),
(262, 'Greenwood', '08:39:00'),
(262, 'Melrose Highlands', '08:42:00'),
(262, 'Melrose Cedar Park', '08:44:00'),
(262, 'Wyoming Hill', '08:46:00'),
(262, 'Malden Center', '08:50:00'),
(262, 'North Station', '09:00:00'),
(214, 'Bradford', '09:08:00'),
(214, 'Lawrence', '09:19:00'),
(214, 'Andover', '09:24:00'),
(214, 'Ballardvale', '09:29:00'),
(214, 'North Wilmington', '09:37:00'),
(214, 'Reading', '09:44:00'),
(214, 'Wakefield', '09:50:00'),
(214, 'Greenwood', '09:53:00'),
(214, 'Melrose Highlands', '09:55:00'),
(214, 'Melrose Cedar Park', '09:57:00'),
(214, 'Wyoming Hill', '09:59:00'),
(214, 'Malden Center', '10:03:00'),
(214, 'North Station', '10:14:00'),
(266, 'Wakefield', '10:11:00'),
(266, 'Greenwood', '10:14:00'),
(266, 'Melrose Highlands', '10:16:00'),
(266, 'Melrose Cedar Park', '10:18:00'),
(266, 'Wyoming Hill', '10:20:00'),
(266, 'Malden Center', '10:24:00'),
(266, 'North Station', '10:35:00'),
(218, 'Bradford', '10:03:00'),
(218, 'Lawrence', '10:14:00'),
(218, 'Andover', '10:19:00'),
(218, 'Ballardvale', '10:25:00'),
(218, 'North Wilmington', '10:32:00'),
(218, 'Reading', '10:39:00'),
(218, 'Wakefield', '10:45:00'),
(218, 'Greenwood', '10:48:00'),
(218, 'Melrose Highlands', '10:50:00'),
(218, 'Melrose Cedar Park', '10:52:00'),
(218, 'Wyoming Hill', '10:54:00'),
(218, 'Malden Center', '10:58:00'),
(218, 'North Station', '11:09:00'),
(220, 'Bradford', '12:03:00'),
(220, 'Lawrence', '12:14:00'),
(220, 'Andover', '12:19:00'),
(220, 'Ballardvale', '12:25:00'),
(220, 'North Wilmington', '12:32:00'),
(220, 'Reading', '12:39:00'),
(220, 'Wakefield', '12:45:00'),
(220, 'Greenwood', '12:48:00'),
(220, 'Melrose Highlands', '12:50:00'),
(220, 'Melrose Cedar Park', '12:52:00'),
(220, 'Wyoming Hill', '12:54:00'),
(220, 'Malden Center', '12:58:00'),
(220, 'North Station', '13:09:00'),
(222, 'Andover', '13:25:00'),
(222, 'Ballardvale', '13:31:00'),
(222, 'North Wilmington', '13:42:00'),
(222, 'Reading', '13:48:00'),
(220, 'North Station', '14:12:00'),
(274, 'Wakefield', '15:05:00'),
(274, 'Greenwood', '15:08:00'),
(274, 'Melrose Highlands', '15:10:00'),
(274, 'Melrose Cedar Park', '15:12:00'),
(274, 'Wyoming Hill', '15:14:00'),
(274, 'Malden Center', '15:18:00'),
(274, 'North Station', '15:29:00'),
(226, 'Bradford', '14:43:00'),
(226, 'Lawrence', '14:54:00'),
(226, 'Andover', '14:59:00'),
(226, 'Ballardvale', '15:05:00'),
(226, 'North Wilmington', '15:12:00'),
(226, 'Reading', '15:19:00'),
(226, 'Wakefield', '15:25:00'),
(226, 'Greenwood', '15:28:00'),
(226, 'Melrose Highlands', '15:30:00'),
(226, 'Melrose Cedar Park', '15:32:00'),
(226, 'Wyoming Hill', '15:34:00'),
(226, 'Malden Center', '15:38:00'),
(226, 'North Station', '15:49:00'),
(280, 'Wakefield', '16:38:00'),
(280, 'Melrose Highlands', '16:41:00'),
(280, 'Malden Center', '16:47:00'),
(280, 'North Station', '16:58:00'),
(232, 'Bradford', '16:33:00'),
(232, 'Lawrence', '16:44:00'),
(232, 'Andover', '16:49:00'),
(232, 'Ballardvale', '16:55:00'),
(232, 'North Wilmington', '17:11:00'),
(232, 'North Station', '17:32:00'),
(282, 'Wakefield', '17:40:00'),
(282, 'Greenwood', '17:43:00'),
(282, 'Melrose Highlands', '17:45:00'),
(282, 'Melrose Cedar Park', '17:47:00'),
(282, 'Wyoming Hill', '17:49:00'),
(282, 'Malden Center', '17:53:00'),
(282, 'North Station', '16:04:00'),
(284, 'Wakefield', '18:44:00'),
(284, 'Greenwood', '18:47:00'),
(284, 'Melrose Highlands', '18:49:00'),
(284, 'Melrose Cedar Park', '18:51:00'),
(284, 'Wyoming Hill', '18:53:00'),
(284, 'Malden Center', '18:57:00'),
(284, 'North Station', '19:08:00'),
(236, 'Bradford', '18:28:00'),
(236, 'Lawrence', '18:39:00'),
(236, 'Andover', '18:44:00'),
(236, 'Ballardvale', '18:50:00'),
(236, 'North Wilmington', '19:00:00'),
(236, 'Reading', '19:04:00'),
(236, 'North Station', '19:25:00'),
(288, 'Wakefield', '20:05:00'),
(288, 'Greenwood', '20:08:00'),
(288, 'Melrose Highlands', '20:10:00'),
(288, 'Melrose Cedar Park', '20:12:00'),
(288, 'Wyoming Hill', '20:14:00'),
(288, 'Malden Center', '20:17:00'),
(288, 'North Station', '20:28:00'),
(238, 'Bradford', '20:28:00'),
(238, 'Lawrence', '20:39:00'),
(238, 'Andover', '20:44:00'),
(238, 'Ballardvale', '20:50:00'),
(238, 'North Wilmington', '20:57:00'),
(238, 'Reading', '21:04:00'),
(238, 'Wakefield', '21:09:00'),
(238, 'Greenwood', '21:12:00'),
(238, 'Melrose Highlands', '21:14:00'),
(238, 'Melrose Cedar Park', '21:16:00'),
(238, 'Wyoming Hill', '21:18:00'),
(238, 'Malden Center', '21:22:00'),
(238, 'North Station', '21:33:00')
");

echo "<br />";


mysql_close($con);

?>