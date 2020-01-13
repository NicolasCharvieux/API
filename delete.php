<?php
if(isset($_GET) && !empty($_GET)) {
    include 'connection.php';
    $id = ($_GET["id"]); 

    $query = "DELETE FROM Musique WHERE id = $id";

    $deleteMusic = $dbConnection->prepare($query);

    $deleteMusic->bindParam(":id", $_GET['id']);

    $deleteMusic->execute();
    echo "L'Id n°$id a bien été supprimer"; 
} else {
    Echo "Rentrer un id SVP";
}