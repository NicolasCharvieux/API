<?php

include 'template/headers.php';
include 'connection.php';

//todo   Créez une requête qui affiche tous les films de notre table 'films'.
$query = "SELECT * FROM Musique";

        //todo   Préparez cette requête avant de l'exécuter.
$preparedQuery = $dbConnection->prepare($query);

        //todo   Exécuter la requête.
$preparedQuery->execute();

        //todo Afficher les films et stock dans une variable $movies.
$musiques = $preparedQuery->fetchAll();
echo json_encode($musiques)


