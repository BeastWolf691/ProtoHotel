<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Hôtels</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .hotel { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; }
        .hotel-name { font-size: 20px; font-weight: bold; color: #333; }
        .hotel-description { font-size: 16px; color: #666; }
    </style>
</head>
<body>
    <h1>Liste des Hôtels</h1>
 
    <?php
    $hotels = [
        ["name" => "Hôtel Plaza Athénée", "description" => "Situé au cœur de Paris, cet hôtel offre une expérience luxueuse avec une vue magnifique sur la Tour Eiffel."],
        ["name" => "Le Bristol Paris", "description" => "Connu pour son élégance exceptionnelle et son service impeccable."],
        ["name" => "Four Seasons Hotel George V", "description" => "Célèbre pour son architecture classique et ses chambres somptueuses."],
        // Ajoutez ici d'autres hôtels
        ["name" => "Hôtel de Crillon", "description" => "Un palais historique offrant un luxe moderne au cœur de la capitale."],
        ["name" => "Le Meurice", "description" => "Un mélange de décor classique et contemporain, face au Jardin des Tuileries."],
        ["name" => "Hôtel Le Royal Monceau", "description" => "Art et élégance dans cet hôtel design proche des Champs-Élysées."],
        ["name" => "Shangri-La Hotel, Paris", "description" => "Hôtel de luxe avec des vues inégalées sur la Seine et la Tour Eiffel."],
        ["name" => "The Peninsula Paris", "description" => "Technologie de pointe et design raffiné au cœur de Paris."],
        ["name" => "Mandarin Oriental, Paris", "description" => "Une oasis de tranquillité avec un jardin paysager unique."],
        ["name" => "Park Hyatt Paris-Vendôme", "description" => "Un style moderne et sophistiqué dans l'un des quartiers les plus prestigieux."],
        ["name" => "Ritz Paris", "description" => "L'un des hôtels les plus prestigieux et historiques de la ville."],
        ["name" => "Hôtel Lancaster", "description" => "Charme et élégance dans une demeure du 19ème siècle."],
        ["name" => "Hôtel Barrière Le Fouquet's Paris", "description" => "Luxueux sanctuaire urbain sur l'avenue des Champs-Élysées."],
        ["name" => "Sofitel Paris Le Faubourg", "description" => "Confort et luxe à proximité des monuments historiques de Paris."],
        ["name" => "InterContinental Paris Le Grand", "description" => "Vues impressionnantes et décor opulent près de l'Opéra Garnier."]
    ];
 
    foreach ($hotels as $hotel) {
        echo "<div class='hotel'>";
        echo "<div class='hotel-name'>" . $hotel['name'] . "</div>";
        echo "<div class='hotel-description'>" . $hotel['description'] . "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>