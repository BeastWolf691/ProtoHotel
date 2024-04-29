<?php
// Paramètres de connexion à la base de données MySQL
$servername = "";
$username = "root";
$password = "";

// Création de la connexion
$conn = new mysqli($servername, $username, $password);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Requête SQL pour créer la base de données
$sql = "CREATE DATABASE gthotel";

// Exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "La base de données a été créée avec succès";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>