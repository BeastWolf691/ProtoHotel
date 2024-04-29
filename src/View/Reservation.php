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

<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

<div class="container">
    <h1>Réservation de Chambre</h1>

    <!-- Affichage des messages d'erreur ou de succès -->
    <?php if ($errorMsg) : ?>
        <div class="alert alert-danger">
            <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>

    <?php if ($successMsg) : ?>
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

        <button type="submit" class="btn btn-success">Réserver</button>
    </form>

    <div class="d-grid gap-2 d-md-block">
        <a href="../../index.php"class="btn btn-success" type="button">Accueil</a>
    </div>
</div>