<?php
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database

if (mysql_query("CREATE DATABASE Lowell",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("Lowell", $con);

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

mysql_select_db("Lowell", $con);

mysql_query("INSERT INTO `code` (`code_no`, `station_name`) VALUES
(1, 'Lowell'),
(2, 'North Billerica'),
(3, 'Wilmington'),
(4, 'Anderson'),
(5, 'Mishawum'),
(6, 'Winchester Center'),
(7, 'Wedgemere'),
(8, 'West Medford'),
(9, 'North Station')
");


//mysql_query($sql,$con);

mysql_query("INSERT INTO `main` (`train_no`, `source`, `time`) VALUES
(302, 'Lowell', '05:35:00'),
(304, 'Lowell', '06:18:00'),
(352,'Anderson','06:55:00'),
(306, 'Lowell', '06:51:00'),
(308, 'Lowell', '07:18:00'),
(310, 'Lowell', '07:46:00'),
(212, 'North Station', '07:30:00'),
(356, 'Anderson', '08:30:00'),
(312, 'Lowell', '08:25:00'),
(358, 'Anderson', '09:15:00'),
(314, 'Lowell', '09:15:00'),
(316, 'Lowell', '10:15:00'),
(318, 'Lowell', '11:15:00'),
(320, 'Lowell', '12:15:00'),
(322, 'Lowell', '13:15:00'),
(324, 'Lowell', '14:35:00'),
(326, 'Lowell', '15:15:00'),
(328, 'Lowell', '16:15:00'),
(360, 'Anderson', '16:55:00'),
(330, 'Lowell', '17:10:00'),
(334, 'Lowell', '17:45:00'),
(336,'Lowell','18:10:00'),
(236,'North Station','18:25:00'),
(338, 'Lowell', '18:55:00'),
(340, 'Lowell', '19:25:00'),
(342, 'Lowell', '20:30:00')
");


mysql_query("INSERT INTO `sub` (`train_no`, `station_name`, `time`) VALUES
(302, 'North Billerica', '05:43:00'),
(302, 'Wilmington', '05:51:00'),
(302, 'Anderson', '05:55:00'),
(302, 'Winchester Center', '06:02:00'),
(302, 'Wedgemere', '06:04:00'),
(302, 'West Medford', '06:08:00'),
(302, 'North Station', '06:22:00'),
(304, 'North Billerica', '06:26:00'),
(304, 'Wilmington', '06:34:00'),
(304, 'Anderson', '06:38:00'),
(304, 'Winchester Center', '06:46:00'),
(304, 'Wedgemere', '06:49:00'),
(304, 'West Medford', '06:53:00'),
(304, 'North Station', '07:05:00'),
(352, 'Winchester Center', '07:04:00'),
(352, 'Wedgemere', '07:06:00'),
(352, 'West Medford', '07:10:00'),
(352, 'North Station', '07:22:00'),
(306, 'North Billerica', '06:59:00'),
(306, 'Wilmington', '07:06:00'),
(306, 'Anderson', '07:13:00'),
(306, 'Winchester Center', '07:21:00'),
(306, 'Wedgemere', '07:24:00'),
(306, 'West Medford', '07:28:00'),
(306, 'North Station', '07:40:00'),
(308, 'North Billerica', '07:26:00'),
(308, 'Anderson', '07:38:00'),
(308, 'Winchester Center', '07:46:00'),
(308, 'Wedgemere', '07:49:00'),
(308, 'West Medford', '07:53:00'),
(308, 'North Station', '08:05:00'),
(310, 'North Billerica', '07:54:00'),
(310, 'Anderson', '08:05:00'),
(310, 'North Station', '08:26:00'),
(212, 'Wilmington', '08:07:00'),
(212, 'Anderson', '08:12:00'),
(212, 'Winchester Center', '08:20:00'),
(212, 'Wedgemere', '08:23:00'),
(212, 'West Medford', '08:27:00'),
(212, 'North Station', '08:39:00'),
(356, 'Winchester Center', '08:39:00'),
(356, 'Wedgemere', '08:41:00'),
(356, 'West Medford', '08:45:00'),
(356, 'North Station', '08:57:00'),
(312, 'North Billerica', '08:33:00'),
(312, 'Wilmington', '08:41:00'),
(312, 'Anderson', '08:45:00'),
(312, 'Winchester Center', '08:52:00'),
(312, 'Wedgemere', '08:54:00'),
(312, 'West Medford', '08:58:00'),
(312, 'North Station', '09:10:00'),
(358, 'Winchester Center', '09:23:00'),
(358, 'Wedgemere', '09:26:00'),
(358, 'West Medford', '09:30:00'),
(358, 'North Station', '09:42:00'),
(314, 'North Billerica', '09:23:00'),
(314, 'Wilmington', '09:31:00'),
(314, 'Anderson', '09:35:00'),
(314, 'Winchester Center', '09:42:00'),
(314, 'Wedgemere', '09:44:00'),
(314, 'West Medford', '09:48:00'),
(314, 'North Station', '09:59:00'),
(316, 'North Billerica', '10:23:00'),
(316, 'Wilmington', '10:31:00'),
(316, 'Anderson', '10:35:00'),
(316, 'Winchester Center', '10:42:00'),
(316, 'Wedgemere', '10:44:00'),
(316, 'West Medford', '10:48:00'),
(316, 'North Station', '10:59:00'),
(318, 'North Billerica', '11:23:00'),
(318, 'Wilmington', '11:31:00'),
(318, 'Anderson', '11:35:00'),
(318, 'Winchester Center', '11;42:00'),
(318, 'Wedgemere', '11:44:00'),
(318, 'West Medford', '11:48:00'),
(318, 'North Station', '11:59:00'),
(320, 'North Billerica', '12:23:00'),
(320, 'Wilmington', '12:31:00'),
(320, 'Anderson', '12:35:00'),
(320, 'Winchester Center', '12:42:00'),
(320, 'Wedgemere', '12:44:00'),
(320, 'West Medford', '12:48:00'),
(320, 'North Station', '12:59:00'),
(322, 'North Billerica', '13:23:00'),
(322, 'Wilmington', '13:31:00'),
(322, 'Anderson', '13:35:00'),
(322, 'Winchester Center', '13:42:00'),
(322, 'Wedgemere', '13:44:00'),
(322, 'West Medford', '13:48:00'),
(322, 'North Station', '13:59:00'),
(324, 'North Billerica', '14:23:00'),
(324, 'Wilmington', '14:31:00'),
(324, 'Anderson', '14:35:00'),
(324, 'Winchester Center', '13:42:00'),
(324, 'Wedgemere', '14:44:00'),
(324, 'West Medford', '14:48:00'),
(324, 'North Station', '14:59:00'),
(326, 'North Billerica', '15:23:00'),
(326, 'Wilmington', '15:31:00'),
(326, 'Anderson', '15:35:00'),
(326, 'Winchester Center', '15:42:00'),
(326, 'Wedgemere', '15:44:00'),
(326, 'West Medford', '15:48:00'),
(326, 'North Station', '15:59:00'),
(328, 'North Billerica', '16:23:00'),
(328, 'Wilmington', '16:31:00'),
(328, 'Anderson', '16:35:00'),
(328, 'Mishawum', '16:36:00'),
(328, 'Winchester Center', '16:42:00'),
(328, 'Wedgemere', '16:44:00'),
(328, 'West Medford', '16:48:00'),
(328, 'North Station', '14:59:00'),
(360, 'North Station', '17:15:00'),
(330, 'North Billerica', '17:18:00'),
(330, 'Wilmington', '17:26:00'),
(330, 'Anderson', '17:30:00'),
(330, 'Mishawum', '17:31:00'),
(330, 'Winchester Center', '17:37:00'),
(330, 'Wedgemere', '17:39:00'),
(330, 'West Medford', '17:43:00'),
(330, 'North Station', '17:56:00'),
(334, 'North Billerica', '17:53:00'),
(334, 'Wilmington', '18:01:00'),
(334, 'Anderson', '18:05:00'),
(334, 'Mishawum', '18:06:00'),
(334, 'Winchester Center', '18:12:00'),
(334, 'Wedgemere', '18:14:00'),
(334, 'West Medford', '18:18:00'),
(334, 'North Station', '18:31:00'),
(336, 'North Billerica', '18:18:00'),
(336, 'Wilmington', '18:26:00'),
(336, 'Anderson', '18:30:00'),
(336, 'Winchester Center', '18:36:00'),
(336, 'Wedgemere', '18:39:00'),
(336, 'West Medford', '18:43:00'),
(336, 'North Station', '18:54:00'),
(236, 'Wilmington', '19:00:00'),
(236, 'Anderson', '19:04:00'),
(236, 'North Station', '19:25:00'),
(338, 'North Billerica', '19:03:00'),
(338, 'Wilmington', '19:11:00'),
(338, 'Anderson', '19:15:00'),
(338, 'Winchester Center', '19:22:00'),
(338, 'Wedgemere', '19:24:00'),
(338, 'West Medford', '19:28:00'),
(338, 'North Station', '19:41:00'),
(340, 'North Billerica', '19:33:00'),
(340, 'Wilmington', '19:41:00'),
(340, 'Anderson', '19:45:00'),
(340, 'Winchester Center', '19:52:00'),
(340, 'Wedgemere', '19:54:00'),
(340, 'West Medford', '19:58:00'),
(340, 'North Station', '20:09:00'),
(342, 'North Billerica', '20:38:00'),
(342, 'Wilmington', '20:46:00'),
(342, 'Anderson', '20:50:00'),
(342, 'Winchester Center', '20:57:00'),
(342, 'Wedgemere', '20:59:00'),
(342, 'West Medford', '21:03:00'),
(342, 'North Station', '21:14:00')
");

echo "<br />";


mysql_close($con);

?>