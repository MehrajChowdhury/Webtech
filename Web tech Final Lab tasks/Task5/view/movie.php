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
<table>
	<tr>
		<th>Name</th>
		<th>Imdb Rating</th>
		<th>Personal Rating</th>
	</tr>
	<tr>
		<td><a href="movie.php?id=<?php echo $movie['ID']?>"><?php echo $movie['Name']?></a></td>
		<td><?php echo $movie['ImdbRating']?></td>
		<td><?php echo $movie['PersonalRating']?></td>
	</tr>
</table>
</body>
</html>