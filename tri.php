<?php

include 'template/headers.php';
include 'connection.php';

if(isset($_GET["Titres"]) && !empty($_GET["Titres"])) {

    $titre = ($_GET["Titres"]); 
    $query = "SELECT * FROM Musique WHERE Titres=$titre";
    $preparedQuery = $dbConnection->prepare($query);
    $preparedQuery->execute();
    $musiquestitre = $preparedQuery->fetchAll();
    echo json_encode($musiquestitre);


}else if (isset($_GET["Genres"]) && !empty($_GET["Genres"])) {
    
    $genre = ($_GET["Genres"]); 
    $query = "SELECT * FROM Musique WHERE Genres=$genre";
    $preparedQuery = $dbConnection->prepare($query);
    $preparedQuery->execute();
    $musiquesgenre = $preparedQuery->fetchAll();
    echo json_encode($musiquesgenre);

} 
else if (isset($_GET["Artistes"]) && !empty($_GET["Artistes"])) {
    
    $artiste = ($_GET["Artistes"]); 
    $query = "SELECT * FROM Musique WHERE Artistes=$artiste";
    $preparedQuery = $dbConnection->prepare($query);
    $preparedQuery->execute();
    $musiquesartiste = $preparedQuery->fetch();
    echo json_encode($musiquesartiste);
}

else if (isset($_GET["Dates"]) && !empty($_GET["Dates"])) {
    
    $date = ($_GET["Dates"]); 
    $query = "SELECT * FROM Musique WHERE Dates=$date";
    $preparedQuery = $dbConnection->prepare($query);
    $preparedQuery->execute();
    $musiquesdate = $preparedQuery->fetch();
    echo json_encode($musiquesdate);
}

else if (isset($_GET["Temps"]) && !empty($_GET["Temps"])) {
    
    $temps = ($_GET["Temps"]); 
    $query = "SELECT * FROM Musique WHERE Temps=$temps";
    $preparedQuery = $dbConnection->prepare($query);
    $preparedQuery->execute();
    $musiquestemps = $preparedQuery->fetch();
    echo json_encode($musiquestemps);

}
