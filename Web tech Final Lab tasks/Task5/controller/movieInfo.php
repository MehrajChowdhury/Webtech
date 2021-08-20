<?php 

require_once ('../model/model.php');

function fetchAllMovies(){
	return showAllMovie();

}
function fetchMovie($id){
	return showMovie($id);

}
