<?php
if(isset($_GET) && !empty($_GET)) {
    include "connection.php";

    $query = "insert into Musique (Titres, Genres, Artistes, Dates, Temps) values (:Titres, :Genres, :Artistes, :Dates, :Temps)";

    $createMusic = $dbConnection->prepare($query);
    
    $createMusic->bindParam(":Titres", $_GET['Titres']);
    $createMusic->bindParam(":Genres", $_GET['Genres']);
    $createMusic->bindParam(":Artistes", $_GET['Artistes']);
    $createMusic->bindParam(":Dates", $_GET['Dates']);
    $createMusic->bindParam(":Temps", $_GET['Temps']);

    $createMusic->execute();

    echo "Bravo votre demande a été envoyer en base de donnée";
} else {
    echo "Il y a une erreur desoler la musique n'a pas put etre envoyer en base de donnée";
}