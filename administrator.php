<?php 
session_start();


?><html>
<body>

<link rel="stylesheet"
type="text/css"
href="css.css" />

<?php
include 'layout.php'?>
<?php
include 'navbar.php'?>
<br/>
<br/>
<div class="admin">
<?php
$username=$_POST["username"];
$password=$_POST["password"];
if(($username=="a") and ($password=="b"))
{
	echo "<h1>WELCOME ADMIN!!!</h1>";
	echo "<h2>Number of Page-Views=". $_SESSION['views']."</h2>";
}
else 
{

echo  " <script language=javascript >
{ alert('Please enter a valid username.');
window.location=('admin.php') ;
}
</script>";
//echo "header( 'Location: admin.php' )" ;
	
	
}
?>

<form action="show.php" method="post">
Post News :<input type="submit" value="submit">
</form>
</div>
<?php include 'footer.php'?>
</body>
</html>