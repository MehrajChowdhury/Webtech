<?php
require_once '../model/model.php';
if(isset($_POST['save']))
{
	$data['name'] =  $_POST['name'];
	$data['imdbr']= $_POST['imdbr'];
	$data['pr']= $_POST['pr'];

	if(updateProduct($_POST['id'], $data))
	{
		echo 'Successfully updated !!';
		header('Location: ../view/movie.php?id=' . $_POST['id']);
	}
	else{echo 'Something went wrong!!!';}
}
?>