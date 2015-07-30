<html>
<head>
<script type="text/javascript" src="crawler.js">
/* Text and/or Image Crawler Script v1.5 (c)2009-2011 John Davenport Scheuer
   as first seen in http://www.dynamicdrive.com/forums/
   username: jscheuer1 - This Notice Must Remain for Legal Use
   updated: 4/2011 for random order option, more (see below)
*/

</script>
</head>
<body>


<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler',
	style: {
		'padding': '5px',
		'width': '850px',
		'background': 'lightyellow',
		'border': '1px solid #CC3300'
	},
	inc: 8, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 4,
	neutral: 150,
	savedirection: true
});
</script>



<div class="marquee" id="mycrawler2">
<img src="a.jpg" /> <img src="qwe.jpg" />
</div>

<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler2',
	style: {
		'padding': '2px',
		'width': '600px',
		'height': '180px'
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>
<marquee>
<img src="a.jpg"/>
<img src="qwe.jpg">

</marquee>
</body>


</html>