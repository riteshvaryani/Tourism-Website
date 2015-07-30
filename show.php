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
<h1 id="n">post news</h1>
<br>
<form action='post.php' method='POST' id="box">
Title:<br/>
<input type='text' name='title'><br/>
Body:<br/>
<textarea rows='6' cols='35' name='body'></textarea><br/>
<input type='submit' name='post' value="post this news">
</hr>
</form>
</div>
</body>
<?php include 'footer.php'?>
</html>