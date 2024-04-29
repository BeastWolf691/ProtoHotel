<?php

// Namespace et use statements ici si vous utilisez l'autoloading et des namespaces

class RoomController {

    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        // Afficher la liste des chambres disponibles
        $result = $this->db->query("SELECT * FROM rooms WHERE available = 1");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function view($roomId) {
        // Afficher les détails d'une chambre spécifique
        $stmt = $this->db->prepare("SELECT * FROM rooms WHERE id = ?");
        $stmt->bind_param("i", $roomId);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } else {
            // Gérer l'erreur
            return null;
        }
    }

    public function reserve($roomId, $userId) {
        // Réserver une chambre
        // Cette logique serait normalement dans le ReservationController,
        // mais je l'ai inclus ici comme exemple.

        // Valider les données et vérifier la disponibilité de la chambre
        // ...

        // Mettre à jour la chambre comme étant réservée
        $stmt = $this->db->prepare("UPDATE rooms SET available = 0 WHERE id = ?");
        $stmt->bind_param("i", $roomId);

        if ($stmt->execute()) {
            echo "Chambre réservée avec succès.";
            // Ici, vous devriez probablement créer également une entrée dans une table de réservations
        } else {
            echo "Erreur lors de la réservation de la chambre.";
            // Gérer l'erreur
        }

        $stmt->close();
    }

    // Ajoutez ici d'autres méthodes comme create, update, delete, etc.
}

// Supposons que $db est votre objet de connexion à la base de données
$roomController = new RoomController($db);

// Appeler une méthode du contrôleur, par exemple pour afficher les chambres
// $rooms = $roomController->index();
// Afficher les chambres à l'aide d'une vue ou d'un template, par exemple
