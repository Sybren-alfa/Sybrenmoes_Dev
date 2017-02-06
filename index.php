<!DOCTYPE html>
<HTML>
<HEAD>
<META content="text/html; charset=utf-8" http-equiv="content-Type" />
<LINK href="formulier.php">
<TITLE>Basiscursus HTML5</TITLE>
</HEAD>
<BODY>

<h1> Hello World </h1>

<form method="POST"
	action"">
Naam:<input type="text" name="naam" id="naam"><br>
Kleur:<input type="text" name="kleur" id="kleur">
<input type="submit" value="klik me :D" name="submit" id="submit">

<?php 
	require "formulier.php";
?>


</form>
</body>
</html>