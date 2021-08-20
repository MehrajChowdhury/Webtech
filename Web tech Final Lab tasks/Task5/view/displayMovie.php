<?php
require_once '../controller/movieInfo.php';

$movies = fetchAllMovies();
include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<fieldset>	
	<legend>DISPLAY</legend>
		<table style="border: 1px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>ir</th>
						<th>prr</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($movies as $i => $movie): ?>
						<tr>
							<td><a href="movie.php?id=<?php $movie['ID']?>"><?php echo $movie['Name']?></a></td>
							<td><?php echo $var = $movie['ImdbRating'] - $movie['PersonalRating'];?></td>
							<td><a href="editMovie.php?id=<?php echo $movie['ID']?>">Edit</a>&nbsp&nbsp<a href="../controller/deleteMovie.php?id=<?php echo $movie['ID']?>"onclick=" return confirm('Are you sure about this?')">Delete</a></td>
						</tr>
					<?php endforeach;?>
				</tbody>
		</table>
</fieldset>
</body>
</html>