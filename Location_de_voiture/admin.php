<?php
// admin.php
$servername = "localhost";
$username = "root"; // Assurez-vous que c'est correct
$password = ""; // Assurez-vous que c'est correct
$dbname = "zeusauto"; // Votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Requête pour récupérer les réservations
$query = "SELECT * FROM reservations"; // Assurez-vous que la table 'reservations' existe
$result = $conn->query($query);

// Vérifiez si la requête a réussi
if ($result === false) {
    die("Erreur lors de l'exécution de la requête : " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur</title>
    <link rel="stylesheet" href="admin.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="reserver.php">Réserver</a>
            <a href="admin.php">Admin</a>
        </nav>
    </header>
    
    <h1>Liste des Réservations</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Voiture</th>
                <th>Date de Réservation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Vérifiez si des réservations ont été trouvées
            if ($result->num_rows > 0) {
                // Sortie de chaque ligne
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>"; // Assurez-vous que la colonne 'id' existe
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['voiture'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>"; // Assurez-vous que la colonne 'date' existe
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucune réservation trouvée</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

<?php
// Fermez la connexion
$conn->close();
?>
