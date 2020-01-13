<?php

//todo   Variable de connexion.
$user = 'root';
$password = 'ohio2805';

//todo   Essayez de vous connecter à notre base de données.
$dbConnection = new PDO('mysql:host=localhost;dbname=les_api', $user, $password);

