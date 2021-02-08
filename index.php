<?php 
echo 'coucou';

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:colyseum=testdb;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    var_dump($dbh);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

 
// Exercice 1
// Afficher tous les clients.



// Exercice 2
// Afficher tous les types de spectacles possibles.




// Exercice 3
// Afficher les 20 premiers clients.




// Exercice 4
// N'afficher que les clients possédant une carte de fidélité.




// Exercice 5
// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
// Les afficher comme ceci :
// Nom : Nom du client
// Prénom : Prénom du client
// Trier les noms par ordre alphabétique.




// Exercice 6
// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.





// Exercice 7
// Afficher tous les clients comme ceci :
// Nom : Nom de famille du client
// Prénom : Prénom du client
// Date de naissance : Date de naissance du client
// Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
// Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.







?>