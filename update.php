<?php
if(isset($_GET) && !empty($_GET)) {

    include "connection.php";
    $id = ($_GET["id"]); 

    $query = "UPDATE Musique SET
        Titres = :Titres,
        Genres = :Genres,
        Artistes = :Artistes,
        Dates = :Dates,
        Temps = :Temps
    WHERE id = :id";

    $updateMusic = $dbConnection->prepare($query);

    $updateMusic->bindParam(":id", $_GET['id']);
    $updateMusic->bindParam(":Titres", $_GET['Titres']);
    $updateMusic->bindParam(":Genres", $_GET['Genres']);
    $updateMusic->bindParam(":Artistes", $_GET['Artistes']);
    $updateMusic->bindParam(":Dates", $_GET['Dates']);
    $updateMusic->bindParam(":Temps", $_GET['Temps']);
    // var_dump ($updateMusic);
    $updateMusic->execute();
    echo "Votre musique a bien été modifier";

} 
else {
    Echo "Rentrer une nouvelle musique";
}
