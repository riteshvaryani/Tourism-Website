<html>
<head>

<link rel="stylesheet"
type="text/css"
href="homepage-css.css" />


</head>
<!--6b0303 border navbar table-->
<body>
<script type="text/javascript"
src="j.js">
</script>
<?php ?>
<table id="table" style="color:#ff0000; cell-padding:10; border:5px solid; border-radius:10px">
 <tr id="abc" >
  <td  onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="homepage.php">Home</td>
  <td  onmouseover="showmenu('map');this.bgColor='#009900'" onmouseout="hidemenu('map');this.bgColor='#ff0000'">
   <a >Map</a>
   <table class="menu" id="map" width="200">
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="map1.php">Boston Map</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="map.php">Transport Map</a></td></tr>
   </table>
  </td>
  <td onmouseover="showmenu('fare');this.bgColor='#009900'" onmouseout="hidemenu('fare');this.bgColor='#ff0000'">
   <a>Fare</a>
   <table class="menu" id="fare" >
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="fare-rail.php">Rail</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="fare-rail.php#bus">Bus</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="fare-rail.php#cab">Cab</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="fare-rail.php#boat">Boat</a></td></tr>
   
  
   </table>
  </td>
  <td onmouseover="showmenu('timetable');this.bgColor='#009900'" onmouseout="hidemenu('timetable');this.bgColor='#ff0000'">
   <a href="#">TimeTable</a>
   <table class="menu" id="timetable">
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="demo.php">Rail</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="bus.php">Bus</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="fare-air.php">Air</a></td></tr>
   </table>
  </td>
 
  
 <td onmouseover="showmenu('safety');this.bgColor='#009900'" onmouseout="hidemenu('safety');this.bgColor='#ff0000'">
   <a>Safety</a>
   <table class="menu" id="safety">
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="emergency.php">Emergency Instructions</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="transit-safety.php">Transit Safety Tips</a></td></tr>
   </table>
  </td>
<td onmouseover="showmenu('customer');this.bgColor='#009900'" onmouseout="hidemenu('customer');this.bgColor='#ff0000'">
   <a>Customer Support</a><br />
   <table class="menu" id="customer" >
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="contact.php">Contact Us</a></td></tr>
   <tr><td class="menu" onmouseover="this.bgColor='#009900'" onmouseout="this.bgColor='#ff0000'"><a href="customerbill.php">Customer Bill Of Rights</a></td></tr>
   </table>
  </td>
</tr>
</table>
</body>
</html>