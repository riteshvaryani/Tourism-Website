<html>
<body>
<h1>train schedule</h1>
<hr>
<?php
 mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("train") or die(mysql_error());
$result=mysql_query("SELECT r.name as name, startingstop.stop as source,t.time as time,endingstop.stop as destination FROM stops startingstop, stops endingstop, route r, schedule t
WHERE
startingstop.stop = 'kalyan'
AND endingstop.stop ='dombivli'
AND r.id=startingstop.id
AND startingstop.id=t.id
AND startingstop.id_stop=t.id_stop
AND startingstop.id_stop > endingstop.id_stop
ORDER BY t.time ASC");
?>
<hr>

</body>
</html>