<?php
// connecter.php
$servername = "localhost";
$username = "root"; // Remplacez par votre nom d'utilisateur
$password = ""; // Remplacez par votre mot de passe
$dbname = "zeusauto"; // Votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $voiture = $_POST['voiture'];
    $date = $_POST['date'];

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO reservations (nom, email, voiture, date) VALUES ('$nom', '$email', '$voiture', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Réservation réussie!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Zeus Auto</title>
    <link rel="stylesheet" href="reserver.css">
</head>
<body>

<header>
        <nav>
            <a href="index.html">Accueil</a>
            <a href="reserver.php">Réserver</a>
            <a href="admin.php">Admin</a>
        </nav>
    </header>
    <h1>Réservez votre voiture</h1>
    <form method="post" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="voiture">Choisir une voiture:</label>
        <select id="voiture" name="voiture" required>
            <option value="Ford Mustang">Ford Mustang</option>
            <option value="BMW Série 3">BMW Série 3</option>
            <option value="Audi A4">Audi A4</option>
        </select>

        <label for="date">Date de réservation:</label>
        <input type="date" id="date" name="date" required>

        <input type="submit" value="Réserver">
    </form>
</body>
</html>
