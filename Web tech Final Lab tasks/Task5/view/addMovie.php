<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action="../controller/addMovie.php" method="POST">
	<?php include "navigation.php";?>

<fieldset>
	<legend>Add Movie</legend>
	
		
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="imdbr">Imdb Rating</label><br>
		<input type="text" id="imdbr" name="imdbr"><br>
		<label for="pr">Personal Rating</label><br>
		<input type="text" id="pr" name="pr"><br>
		<hr>
		<input type="checkbox" id="display" name="display">Display<br>
		<hr>
		<input type="submit" name="save" value="Save">
	
</fieldset>
</form>
</body>
</html>