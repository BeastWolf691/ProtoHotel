<?php
// Imaginez que vous ayez un fichier "config.php" où vous configurez votre connexion à la base de données
// et un fichier "functions.php" où vous avez des fonctions utilitaires comme celles pour la validation
// include 'config.php';
// include 'functions.php';

// Variables pour stocker les messages d'erreur ou de succès
$errorMsg = '';
$successMsg = '';

// Traitement du formulaire de réservation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assainir les entrées
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $date_arrival = trim($_POST['date_arrival']);
    $date_departure = trim($_POST['date_departure']);
    $room_type = trim($_POST['room_type']);

    // Valider les entrées (cette fonction est hypothétique)
    // $isValid = validateReservation($name, $email, $date_arrival, $date_departure, $room_type);

    // Simulons que la validation est passée pour cet exemple
    $isValid = true;

    if ($isValid) {
        // Enregistrement de la réservation dans la base de données (hypothétique)
        // $reservationId = saveReservation($name, $email, $date_arrival, $date_departure, $room_type);
        
        // Simulons un ID de réservation
        $reservationId = rand(1000, 9999);

        if ($reservationId) {
            $successMsg = "Votre réservation a été enregistrée avec succès. Votre numéro de réservation est : " . $reservationId;
        } else {
            $errorMsg = "Une erreur s'est produite lors de l'enregistrement de votre réservation.";
        }
    } else {
        $errorMsg = "Veuillez fournir des informations valides pour la réservation.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservation de Chambre</title>
    <!-- Intégration de Bootstrap pour le style -->
    <link href="path_to_bootstrap.css" rel="stylesheet">
    <link href="../styleProject.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="container">
    <h1>Réservation de Chambre</h1>
    
    <!-- Affichage des messages d'erreur ou de succès -->
    <?php if ($errorMsg): ?>
        <div class="alert alert-danger">
            <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>

    <?php if ($successMsg): ?>
        <div class="alert alert-success">
            <?php echo $successMsg; ?>
        </div>
    <?php endif; ?>

    <form action="reservation.php" method="post">
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="date_arrival">Date d'arrivée:</label>
            <input type="date" class="form-control" id="date_arrival" name="date_arrival" required>
        </div>

        <div class="form-group">
            <label for="date_departure">Date de départ:</label>
            <input type="date" class="form-control" id="date_departure" name="date_departure" required>
        </div>

        <div class="form-group">
            <label for="room_type">Type de chambre:</label>
            <select class="form-control" id="room_type" name="room_type">
                <option value="single">Simple</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
</div>

<!-- Intégration de Bootstrap JS et dépendances -->
<script src="path_to_jquery.js"></script>
<script src="path_to_bootstrap_js"></script>
</body>
</html>
