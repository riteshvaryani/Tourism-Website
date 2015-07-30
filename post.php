<html>
<body>

<link rel="stylesheet"
type="text/css"
href="css.css" />

<?php
include 'layout.php'?>
</br></br>
<?php
include 'navbar.php'?>
<br/>
<br/>
<div class="admin">
<?php

if($_POST['post'])
{

$title=$_POST['title'];
$body=$_POST['body'];
if($title && $body)
{
 mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("news") or die(mysql_error());
 $date=date("d-m-y");
 $insert=mysql_query("INSERT INTO news VALUES('','$title','$body','$date')") or die(mysql_error());
 die("your news has been created");
}
else 
echo "please fill out title and body";
}


?>
</body>
</html>