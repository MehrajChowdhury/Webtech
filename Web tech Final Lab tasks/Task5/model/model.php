<?php 

require_once 'db_connect.php';


function showAllMovie(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `movie` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showMovie($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `movie` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchMovie($Movie_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `movie` WHERE Name LIKE '%$Movie_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addMovie($data){
	$conn = db_conn();
    $selectQuery = "INSERT into movie (Name, ImdbRating, PersonalRating)
VALUES (:name, :imdbr, :pr)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':imdbr' => $data['imdbr'],
        	':pr' => $data['pr']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateMovie($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE movie set Name = ?, ImdbRating = ?, PersonalRating = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['imdbr'], $data['pr'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteMovie($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `movie` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}