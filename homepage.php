<?php 
session_start();
$_SESSION; 
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
//echo "Views=". $_SESSION['views'];
 ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="crawler.js">
<link rel="stylesheet"
type="text/css"
href="homepage-css.css" />
<script type="text/javascript"
src="j.js">
</script>

</head>

<body id="body">
<a href="admin.php" style="float:right">Administrative Login</a>

<!--<marquee style="z-index:2;
position:absolute;
left:560;
top:200;
font-family:Cursive;
font-size:14pt;
color:ffcc00;
height:158;
"scrollamount="4"
 direction="down">
<img src="ab.jpg" alt="Smiley face" height="142" width="142" />

</marquee>
-->

<div class="logo">
<img src="boston.gif" alt="logo11" height="200" width="200" />
<img src="banner.jpg" alt="logo" height="200" width="1350" />
</div>
<?php
include 'navbar.php'; ?>

<script type="text/javascript">
//preload images
var image1=new Image()
image1.src="fpz.jpg"
var image2=new Image()
image2.src="fp.jpg"
var image3=new Image()
image3.src="boston3.jpg"
var image4=new Image()
image4.src="bpg.jpg"
//var image5=new Image()
//image5.src="boston5.jpg"
var image5=new Image()
image5.src="boston6.jpg"
var image6=new Image()
image6.src="opera house.jpg"
var image7=new Image()
image7.src="georges island.jpg"
var image8=new Image()
image8.src="bpl.jpg"
var image9=new Image()
image9.src="bmfa.jpg"
</script>

<div id="landmarktitle">
<marquee>
Boston As You See It!!!
</marquee>
</div>

<div id="places">
<a href="javascript:slidelink()">
<img src="firstcar.gif" name="slide" border="0" width="100%" height="100%" /></a>
<script type="text/javascript">
var step=1
var whichimage=1
function slideit(){
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
whichimage=step
if (step<9)
step++
else
step=1
setTimeout("slideit()",1800)
}
slideit()
function slidelink(){
if (whichimage==1)
window.location="fpz.php"
else if (whichimage==2)
window.location="fp.php"
else if (whichimage==3)
window.location="skyline.php"
else if (whichimage==4)
window.location="bpg.php"
else if (whichimage==5)
window.location="boston6.php"
else if (whichimage==6)
window.location="opera house.php"
else if (whichimage==7)
window.location="boston7.php"
else if (whichimage==8)
window.location="bpl.php"
else if (whichimage==9)
window.location="bmfa.php"

}

</script>
</div>
<div id="developers">

<marquee behaviour="scroll">
<a href="d.php"><img src="card1.jpg" height="225px"/></a>
<a href="re.php"><img src="card2.jpg" height="225px"/></a>

</marquee>
</div>

<div id="newstitle">
<marquee>
<a>NEWS AND UPDATES!!!</a>
</marquee>
</div>

<div id="news">
<?php include 'news.php'?>
</div>

<div id="video">
 <video width="400px" height="320px" controls="controls">
  <source src="movie1.mp4" type="video/mp4" />
  <!--<source src="movie1.swf" type="video/swf" />
  <source src="movie1.avi" type="video/avi" />
  <object data="movie1.mp4" width="320" height="240">
    <embed src="movie1.mp4" width="320" height="240" />
  </object>--> 
</video> 
</div>

<?php include 'footer.php'?>
</html>

	