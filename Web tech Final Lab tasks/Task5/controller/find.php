<?php
require_once '../model/model.php';
if(isset($_POST['find']))
{
	echo $_POST['movie_name'];
	try
	{
		$allSearchProducts = searchMovie($_POST['movie_name']);
		require_once '../view/searchMovie.php';
	}
	catch (Exception $ex)
	{
		echo $ex ->getMessage();
	}
}
?>