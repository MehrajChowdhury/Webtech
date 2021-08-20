<?php
require_once '../controller/movieInfo.php';
$product = fetchMovie($_GET['id']);

include "navigation.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="../controller/updateMovie.php" method="POST">
	<fieldset>
		<legend>Edit Movie</legend>
		<label for="name">Name</label><br>
		<input type="text" id="name" name="name" value="<?php echo $movie['Name']?>"><br>
		<label for="imdbr">Imdb Rating</label><br>
		<input type="text" name="imdbr" id="imdbr" value="<?php echo $movie['ImdbRating']?>"><br>
		<label for="pr">Personal Rating</label>
		<input type="text" name="pr" id="pr" value="<?php echo $movie['PersonalRating']?>"><br><hr>
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="checkbox" name="display" id="display">Display<br><hr>
		<input type="submit" name="save" value="Save">

	</fieldset>
</form>
</body>
</html>