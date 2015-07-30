<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE Haverhill_r",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Haverhill_r", $con);

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
(1, 'North Station'),
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
(14, 'Haverhill')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(253, 'North Station', '06:45:00'),
(255, 'North Station', '07:15:00'),
(205, 'North Station', '07:35:00'),
(257, 'North Station', '07:50:00'),
(209, 'North Station', '08:04:00'),
(261, 'North Station', '09:25:00'),
(213, 'North Station', '10:30:00'),
(215, 'North Station', '12:20:00'),
(269, 'North Station', '14:20:00'),
(275, 'North Station', '15:50:00'),
(227, 'North Station', '16:30:00'),
(279, 'North Station', '16:49:00'),
(231, 'North Station', '17:15:00'),
(233, 'North Station', '17:35:00'),
(281, 'North Station', '17:55:00'),
(235, 'North Station', '18:20:00'),
(237, 'North Station', '18:55:00'),
(287, 'North Station', '19:20:00'),
(239, 'North Station', '19:40:00'),
(291, 'North Station', '19:35:00')
");


mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(253, 'Malden Center', '06:55:00'),
(253, 'Wyoming Hill', '06:59:00'),
(253, 'Melrose Cedar Park', '07:01:00'),
(253, 'Melrose Highlands', '07:03:00'),
(253, 'Wakefield', '07:07:00'),
(253, 'Reading', '07:14:00'),
(255, 'Malden Center', '07:25:00'),
(255, 'Wyoming Hill', '07:28:00'),
(255, 'Melrose Cedar Park', '07:30:00'),
(255, 'Melrose Highlands', '07:32:00'),
(255, 'Wakefield', '07:36:00'),
(255, 'Reading', '07:43:00'),
(205, 'Malden Center', '07:45:00'),
(205, 'Wyoming Hill', '07:49:00'),
(205, 'Melrose Cedar Park', '07:51:00'),
(205, 'Melrose Highlands', '07:53:00'),
(205, 'Wakefield', '07:58:00'),
(205, 'Reading', '08:05:00'),
(205, 'North Wilmington', '08:12:00'),
(205, 'Ballardvale', '08:20:00'),
(205, 'Andover', '08:27:00'),
(205, 'Lawrence', '08:33:00'),
(205, 'Bradford', '08:42:00'),
(205, 'Haverhill', '08:45:00'),
(257, 'Reading', '08:17:00'),
(209, 'Malden Center', '08:14:00'),
(209, 'Melrose Cedar Park', '08:19:00'),
(209, 'Melrose Highlands', '08:21:00'),
(209, 'Greenwood', '08:23:00'),
(209, 'Wakefield', '08:28:00'),
(209, 'Reading', '08:36:00'),
(209, 'North Wilmington', '08:43:00'),
(209, 'Ballardvale', '08:51:00'),
(209, 'Andover', '08:58:00'),
(209, 'Lawrence', '09:04:00'),
(209, 'Bradford', '09:13:00'),
(209, 'Haverhill', '09:16:00'),
(261, 'Malden Center', '09:35:00'),
(261, 'Wyoming Hill', '09:38:00'),
(261, 'Melrose Cedar Park', '09:40:00'),
(261, 'Melrose Highlands', '09:42:00'),
(261, 'Greenwood', '09:44:00'),
(261, 'Wakefield', '09:47:00'),
(261, 'Reading', '09:53:00'),
(213, 'Malden Center', '10:40:00'),
(213, 'Wyoming Hill', '10:43:00'),
(213, 'Melrose Cedar Park', '10:45:00'),
(213, 'Melrose Highlands', '10:47:00'),
(213, 'Greenwood', '10:49:00'),
(213, 'Wakefield', '10:52:00'),
(213, 'Reading', '10:58:00'),
(213, 'North Wilmington', '11:05:00'),
(213, 'Ballardvale', '11:13:00'),
(213, 'Andover', '11:20:00'),
(213, 'Lawrence', '11:26:00'),
(213, 'Bradford', '11:35:00'),
(213, 'Haverhill', '11:38:00'),
(215, 'Malden Center', '12:30:00'),
(215, 'Wyoming Hill', '12:33:00'),
(215, 'Melrose Cedar Park', '12:35:00'),
(215, 'Melrose Highlands', '12:37:00'),
(215, 'Greenwood', '13:39:00'),
(215, 'Wakefield', '13:42:00'),
(215, 'Reading', '13:48:00'),
(215, 'North Wilmington', '12:55:00'),
(215, 'Ballardvale', '13:03:00'),
(215, 'Andover', '13:10:00'),
(269, 'Malden Center', '14:30:00'),
(269, 'Wyoming Hill', '14:33:00'),
(269, 'Melrose Cedar Park', '14:35:00'),
(269, 'Melrose Highlands', '14:37:00'),
(269, 'Greenwood', '14:39:00'),
(269, 'Wakefield', '14:42:00'),
(269, 'Reading', '14:48:00'),
(275, 'Malden Center', '16:01:00'),
(275, 'Wyoming Hill', '16:04:00'),
(275, 'Melrose Cedar Park', '16:06:00'),
(275, 'Melrose Highlands', '16:08:00'),
(275, 'Greenwood', '16:10:00'),
(275, 'Wakefield', '16:14:00'),
(275, 'Reading', '16:20:00'),
(227, 'Malden Center', '16:41:00'),
(227, 'Melrose Cedar Park', '16:45:00'),
(227, 'Melrose Highlands', '16:47:00'),
(227, 'Wakefield', '16:53:00'),
(227, 'Reading', '16:59:00'),
(227, 'North Wilmington', '17:06:00'),
(227, 'Ballardvale', '17:15:00'),
(227, 'Andover', '17:23:00'),
(227, 'Lawrence', '17:29:00'),
(227, 'Bradford', '17:38:00'),
(227, 'Haverhill', '17:41:00'),
(279, 'Malden Center', '16:59:00'),
(279, 'Wyoming Hill', '17:02:00'),
(279, 'Melrose Cedar Park', '17:04:00'),
(279, 'Melrose Highlands', '17:07:00'),
(279, 'Greenwood', '17:09:00'),
(279, 'Wakefield', '17:14:00'),
(279, 'Reading', '17:20:00'),
(231, 'Malden Center', '17:25:00'),
(231, 'Wakefield', '17:35:00'),
(231, 'Reading', '17:42:00'),
(231, 'North Wilmington', '17:49:00'),
(231, 'Ballardvale', '17:58:00'),
(231, 'Andover', '18:06:00'),
(231, 'Lawrence', '18:12:00'),
(231, 'Bradford', '18:22:00'),
(231, 'Haverhill', '18:25:00'),
(233, 'Malden Center', '17:45:00'),
(233, 'Wyoming Hill', '17:48:00'),
(233, 'Melrose Cedar Park', '17:50:00'),
(233, 'Melrose Highlands', '17:53:00'),
(233, 'Greenwood', '17:55:00'),
(233, 'Wakefield', '18:00:00'),
(233, 'Reading', '18:06:00'),
(233, 'North Wilmington', '18:13:00'),
(233, 'Ballardvale', '18:21:00'),
(233, 'Andover', '18:28:00'),
(233, 'Lawrence', '18:34:00'),
(233, 'Bradford', '18:44:00'),
(233, 'Haverhill', '18:47:00'),
(281, 'Malden Center', '18:05:00'),
(281, 'Wyoming Hill', '18:08:00'),
(281, 'Melrose Cedar Park', '18:10:00'),
(281, 'Melrose Highlands', '18:12:00'),
(281, 'Greenwood', '18:15:00'),
(281, 'Wakefield', '18:19:00'),
(281, 'Reading', '18:25:00'),
(235, 'Malden Center', '18:30:00'),
(235, 'Wyoming Hill', '18:33:00'),
(235, 'Melrose Cedar Park', '18:35:00'),
(235, 'Melrose Highlands', '18:37:00'),
(235, 'Greenwood', '18:40:00'),
(235, 'Wakefield', '18:43:00'),
(235, 'Reading', '18:49:00'),
(235, 'North Wilmington', '18:56:00'),
(235, 'Ballardvale', '19:04:00'),
(235, 'Andover', '19:11:00'),
(235, 'Lawrence', '19:17:00'),
(235, 'Bradford', '19:27:00'),
(235, 'Haverhill', '19:30:00'),
(237, 'Reading', '19:19:00'),
(237, 'North Wilmington', '19:23:00'),
(237, 'Ballardvale', '19:34:00'),
(237, 'Andover', '19:41:00'),
(237, 'Lawrence', '19:47:00'),
(237, 'Bradford', '19:56:00'),
(237, 'Haverhill', '19:59:00'),
(287, 'Malden Center', '19:30:00'),
(287, 'Wyoming Hill', '19:33:00'),
(287, 'Melrose Cedar Park', '19:35:00'),
(287, 'Melrose Highlands', '19:38:00'),
(287, 'Greenwood', '19:40:00'),
(287, 'Wakefield', '19:44:00'),
(287, 'Reading', '19:50:00'),
(239, 'Malden Center', '20:50:00'),
(239, 'Wyoming Hill', '20:53:00'),
(239, 'Melrose Cedar Park', '20:55:00'),
(239, 'Melrose Highlands', '20:57:00'),
(239, 'Greenwood', '20:59:00'),
(239, 'Wakefield', '21:04:00'),
(239, 'Reading', '21:10:00'),
(239, 'North Wilmington', '21:16:00'),
(239, 'Ballardvale', '21:24:00'),
(239, 'Andover', '21:30:00'),
(239, 'Lawrence', '21:36:00'),
(239, 'Bradford', '21:45:00'),
(239, 'Haverhill', '21:48:00'),
(291, 'Malden Center', '21:45:00'),
(291, 'Wyoming Hill', '21:48:00'),
(291, 'Melrose Cedar Park', '21:50:00'),
(291, 'Melrose Highlands', '21:52:00'),
(291, 'Greenwood', '21:54:00'),
(291, 'Wakefield', '21:58:00'),
(291, 'Reading', '22:04:00')
");

echo "<br />";


mysql_close($con);

?>