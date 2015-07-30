<html>
<body>
<?php
include 'layout.php'?>
<body >

<script type="text/javascript"
src="j.js">
</script>
<link rel="stylesheet"
type="text/css"
href="css.css" />
<?php
include 'navbar.php'?>
<br/>
<br/>
<div class="admin">
<form action="administrator.php" method="post">
Username: <input type="text" name="username" autocomplete="off"/>
Password: <input type="password" name="password" />
<input type="submit" />
</form>
</div>
<?php include 'footer.php'?>
</body>
</html>