<?php
// Include your database configuration file
// include 'config.php';

// Imagine that you have a function to get all services
// $services = getAllServices();

// Mock data - replace this with your actual database query results
$services = [
    ['id' => 1, 'name' => 'Spa', 'description' => 'Accès complet au spa et à la salle de massage.', 'price' => 50],
    ['id' => 2, 'name' => 'Gym', 'description' => 'Accès 24/7 à notre gymnase bien équipé.', 'price' => 25],
    ['id' => 3, 'name' => 'Petit déjeuner', 'description' => 'Buffet petit déjeuner international.', 'price' => 20],
    // ... more services
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Services de l'Hôtel</title>
    <!-- Intégration de Bootstrap pour le style -->
    <link href="path_to_bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Services de l'Hôtel</h1>
    
    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="card-text">Prix: <?php echo htmlspecialchars($service['price'], ENT_QUOTES, 'UTF-8'); ?>€</p>
                        <a href="order_service.php?service_id=<?php echo $service['id']; ?>" class="btn btn-primary">Commander</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Intégration de Bootstrap JS et dépendances -->
<script src="path_to_jquery.js"></script>
<script src="path_to_bootstrap_js"></script>
</body>
</html>
