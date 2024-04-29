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

<link href="../../src/styleProject.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><!--lien de bootstrap-->

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
    <li class="nav-item">
        <button type="button" class="btn btn-success">
            <a class="nav-link" href="../../index.php">Accueil</a></button>
    </li>
</div>

<!-- Intégration de Bootstrap JS et dépendances -->
<script src="path_to_jquery.js"></script>
<script src="path_to_bootstrap_js"></script>
</body>
</html>
