<?php
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database

if (mysql_query("CREATE DATABASE Lowell_r",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Lowell_r", $con);

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

mysql_select_db("Lowell_r", $con);

mysql_query("INSERT INTO `code` (`code_no`, `station_name`) VALUES
(9, 'Lowell'),
(8, 'North Billerica'),
(7, 'Wilmington'),
(6, 'Anderson'),
(5, 'Mishawum'),
(4, 'Winchester Center'),
(3, 'Wedgemere'),
(2, 'West Medford'),
(1, 'North Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(301, 'North Station', '05:45:00'),
(351, 'North Station', '06:25:00'),
(305, 'North Station','06:45:00'),
(307, 'North Station', '07:25:00'),
(355, 'North Station', '07:55:00'),
(309, 'North Station', '08:10:00'),
(357, 'North Station', '08:40:00'),
(311, 'North Station', '09:10:00'),
(315, 'North Station', '10:10:00'),
(317, 'North Station', '11:10:00'),
(319, 'North Station', '12:10:00'),
(321, 'North Station', '13:10:00'),
(323, 'North Station', '14:10:00'),
(325, 'North Station', '15:10:00'),
(327, 'North Station', '16:10:00'),
(359, 'North Station', '16:20:00'),
(329, 'North Station', '16:40:00'),
(331, 'North Station', '17:10:00'),
(333, 'North Station', '17:30:00'),
(335, 'North Station', '17:50:00'),
(337, 'North Station', '18:25:00'),
(339, 'North Station','19:30:00'),
(341, 'North Station','20:30:00'),
(343, 'North Station', '21:40:00'),
(345, 'North Station', '22:40:00'),
(347, 'North Station', '00:10:00')
");


mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(301, 'West Medford', '05:57:00'),
(301, 'Wedgemere', '06:01:00'),
(301, 'Winchester Center', '06:03:00'),
(301, 'Anderson', '06:10:00'),
(301, 'Wilmington', '06:14:00'),
(301, 'North Billerica', '06:22:00'),
(301, 'Lowell', '06:29:00'),
(351, 'Anderson', '06:45:00'),
(305, 'West Medford', '06:57:00'),
(305, 'Winchester Center', '07:01:00'),
(305, 'Mishawum', '07:07:00'),
(305, 'Anderson', '07:08:00'),
(305, 'Wilmington', '07:13:00'),
(305, 'North Billerica', '07:21:00'),
(305, 'Lowell', '07:30:00'),
(307, 'West Medford', '07:37:00'),
(307, 'Wedgemere', '07:41:00'),
(307, 'Winchester Center', '07:43:00'),
(307, 'Mishawum', '07:49:00'),
(307, 'Anderson', '07:50:00'),
(307, 'Wilmington', '07:54:00'),
(307, 'North Billerica', '08:02:00'),
(307, 'Lowell', '08:11:00'),
(355, 'Anderson', '08:17:00'),
(309, 'West Medford', '08:22:00'),
(309, 'Wedgemere', '08:26:00'),
(309, 'Winchester Center', '08:28:00'),
(309, 'Mishawum', '08:34:00'),
(309, 'Anderson', '08:35:00'),
(309, 'Wilmington', '08:39:00'),
(309, 'North Billerica', '08:47:00'),
(309, 'Lowell', '08:56:00'),
(357, 'Anderson', '09:02:00'),
(311, 'West Medford', '09:22:00'),
(311, 'Wedgemere', '09:26:00'),
(311, 'Winchester Center', '09:28:00'),
(311, 'Anderson', '09:35:00'),
(311, 'Wilmington', '09:39:00'),
(311, 'North Billerica', '09:47:00'),
(311, 'Lowell', '09:54:00'),
(315, 'West Medford', '10:22:00'),
(315, 'Wedgemere', '10:26:00'),
(315, 'Winchester Center', '10:28:00'),
(315, 'Anderson', '10:35:00'),
(315, 'Wilmington', '10:39:00'),
(315, 'North Billerica', '10:47:00'),
(315, 'Lowell', '10:56:00'),
(317, 'West Medford', '11:22:00'),
(317, 'Wedgemere', '11:26:00'),
(317, 'Winchester Center', '11:28:00'),
(317, 'Anderson', '11:35:00'),
(317, 'Wilmington', '11:39:00'),
(317, 'North Billerica', '11:47:00'),
(317, 'Lowell', '11:56:00'),
(319, 'West Medford', '12:22:00'),
(319, 'Wedgemere', '12:26:00'),
(319, 'Winchester Center', '12:28:00'),
(319, 'Anderson', '12:35:00'),
(319, 'Wilmington', '12:39:00'),
(319, 'North Billerica', '12:47:00'),
(319, 'Lowell', '12:54:00'),
(321, 'West Medford', '13:22:00'),
(321, 'Wedgemere', '13:26:00'),
(321, 'Winchester Center', '13:28:00'),
(321, 'Anderson', '13:35:00'),
(321, 'Wilmington', '13:39:00'),
(321, 'North Billerica', '13:47:00'),
(321, 'Lowell', '13:54:00'),
(323, 'West Medford', '14:22:00'),
(323, 'Wedgemere', '14:26:00'),
(323, 'Winchester Center', '14:28:00'),
(323, 'Anderson', '14:35:00'),
(323, 'Wilmington', '14:39:00'),
(323, 'North Billerica', '14:47:00'),
(323, 'Lowell', '14:54:00'),
(325, 'West Medford', '15:22:00'),
(325, 'Wedgemere', '15:26:00'),
(325, 'Winchester Center', '15:28:00'),
(325, 'Anderson', '15:35:00'),
(325, 'Wilmington', '15:39:00'),
(325, 'North Billerica', '15:47:00'),
(325, 'Lowell', '15:54:00'),
(327, 'West Medford', '16:22:00'),
(327, 'Wedgemere', '16:26:00'),
(327, 'Winchester Center', '16:28:00'),
(327, 'Anderson', '16:35:00'),
(327, 'Wilmington', '16:39:00'),
(327, 'North Billerica', '16:47:00'),
(327, 'Lowell', '16:58:00'),
(359, 'West Medford', '16:32:00'),
(359, 'Wedgemere', '16:36:00'),
(359, 'Winchester Center', '16:38:00'),
(359, 'Anderson', '16:45:00'),
(329, 'West Medford', '16:53:00'),
(329, 'Wedgemere', '16:57:00'),
(329, 'Winchester Center', '17:00:00'),
(329, 'Anderson', '17:08:00'),
(329, 'Wilmington', '17:13:00'),
(329, 'North Billerica', '17:21:00'),
(329, 'Lowell', '17:31:00'),
(331, 'West Medford', '17:23:00'),
(331, 'Wedgemere', '17:27:00'),
(331, 'Winchester Center', '17:30:00'),
(331, 'Anderson', '17:38:00'),
(331, 'Wilmington', '17:43:00'),
(331, 'North Billerica', '17:52:00'),
(331, 'Lowell', '17:59:00'),
(333, 'Anderson', '17:50:00'),
(333, 'Wilmington', '17:55:00'),
(333, 'North Billerica', '18:03:00'),
(333, 'Lowell', '18:10:00'),
(335, 'West Medford', '18:03:00'),
(335, 'Wedgemere', '18:07:00'),
(335, 'Winchester Center', '18:10:00'),
(335, 'Anderson', '18:18:00'),
(335, 'Wilmington', '18:23:00'),
(335, 'North Billerica', '18:32:00'),
(335, 'Lowell', '18:39:00'),
(337, 'West Medford', '18:37:00'),
(337, 'Wedgemere', '18:41:00'),
(337, 'Winchester Center', '18:44:00'),
(337, 'Anderson', '18:52:00'),
(337, 'Wilmington', '18:57:00'),
(337, 'North Billerica', '19:05:00'),
(337, 'Lowell', '19:12:00'),
(339, 'West Medford', '19:42:00'),
(339, 'Wedgemere', '19:46:00'),
(339, 'Winchester Center', '19:48:00'),
(339, 'Anderson', '19:55:00'),
(339, 'Wilmington', '20:00:00'),
(339, 'North Billerica', '20:08:00'),
(339, 'Lowell', '20:15:00'),
(341, 'West Medford', '20:42:00'),
(341, 'Wedgemere', '20:46:00'),
(341, 'Winchester Center', '20:48:00'),
(341, 'Anderson', '20:55:00'),
(341, 'Wilmington', '21:00:00'),
(341, 'North Billerica', '21:07:00'),
(341, 'Lowell', '21:14:00'),
(343, 'West Medford', '21:52:00'),
(343, 'Wedgemere', '21:56:00'),
(343, 'Winchester Center', '21:58:00'),
(343, 'Anderson', '21:05:00'),
(343, 'Wilmington', '21:09:00'),
(343, 'North Billerica', '21:17:00'),
(343, 'Lowell', '21:24:00'),
(345, 'West Medford', '22:52:00'),
(345, 'Wedgemere', '22:56:00'),
(345, 'Winchester Center', '22:58:00'),
(345, 'Anderson', '23:05:00'),
(345, 'Wilmington', '23:09:00'),
(345, 'North Billerica', '23:17:00'),
(345, 'Lowell', '23:24:00'),
(347, 'West Medford', '00:22:00'),
(347, 'Wedgemere', '00:27:00'),
(347, 'Winchester Center', '00:30:00'),
(347, 'Anderson', '00:38:00'),
(347, 'Wilmington', '00:43:00'),
(347, 'North Billerica', '00:52:00'),
(347, 'Lowell', '00:57:00')
");

echo "<br />";


mysql_close($con);

?>