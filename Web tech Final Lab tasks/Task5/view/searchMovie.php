<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php include "navigation.php";?>
<form action="../controller/find.php" method="POST">
	<fieldset>
		<legend>SEARCH</legend>
		<input type="text" name="movie_name">
		<input type="submit" name="find" value="Search"><br>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allSearchMovies as $i => $movie): ?>
					<tr>
						<td><a href="../movie.php?id=<?php echo $movie['ID']?>"><?php echo $movie['ID']?></a></td>
						<td><?php echo $movie['Name']?></td>
						<td><a href="../editMovie.php?id=<?php echo $movie['ID']?>">Edit</a>&nbsp<a href="deleteMovie.php?id=<?php echo $movie['ID']?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</fieldset>
</form>
</body>
</html>