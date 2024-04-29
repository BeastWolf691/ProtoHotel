<?php
// Début du fichier PHP et inclusion du fichier header
include '../Controller/RoomController.php'; // Assurez-vous que le chemin est correct pour inclure RoomController

// Supposons que $db est votre objet de connexion à la base de données
$db = new mysqli("hostname", "username", "password", "database"); // Mettez à jour avec vos données de connexion réelles
$roomController = new RoomController($db);

// Appeler une méthode du contrôleur pour obtenir les chambres disponibles
$rooms = $roomController->index();

// Vérifiez que $rooms n'est pas vide avant de l'utiliser
if ($rooms):
    // Ici, vous afficherez les chambres avec une boucle foreach
    foreach ($rooms as $room):
?>
    <div class="room">
        <h2><?= htmlspecialchars($room['name']) ?></h2> <!-- Supposons que 'name' est une colonne dans votre table rooms -->
        <p>Description: <?= htmlspecialchars($room['description']) ?></p> <!-- Affiche la description de la chambre -->
        <p>Price: <?= number_format($room['price'], 2) ?> €</p> <!-- Affiche le prix formatté de la chambre -->
        <img src="<?= htmlspecialchars($room['image_url']) ?>" alt="Photo of <?= htmlspecialchars($room['name']) ?>"> <!-- Affiche une image de la chambre -->
    </div>
<?php
    endforeach;
else:
    echo "<p>Aucune chambre disponible pour le moment.</p>";
endif;

?>