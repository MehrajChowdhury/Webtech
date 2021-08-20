<?php  
require_once '../model/model.php';


if (isset($_POST['save'])) {
	$data['name'] = $_POST['name'];
	$data['imdbr'] = $_POST['imdbr'];
	$data['pr'] = $_POST['pr'];
	
	if (addMovie($data)) {
  		echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>pr