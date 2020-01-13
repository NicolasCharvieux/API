<?php

include 'template/headers.php';
include 'connection.php';


$id = ($_GET["id"]); 
$query = "SELECT * FROM Musique WHERE id=$id";

$preparedQuery = $dbConnection->prepare($query);

$preparedQuery->execute();

$musiques = $preparedQuery->fetch();

$query = "SELECT COUNT(*) as nb FROM les_api.Musique";
$prepareID = $dbConnection->prepare($query);
$prepareID->execute();
$idNumber = $prepareID->fetch();

if ($id >= $idNumber['nb'] || $id <= 0){
    echo "Merci de rentrer un id entre 1 et ".$idNumber['nb'];
}
else {
    echo json_encode($musiques);
}