<?php

// Namespace et use statements ici si vous utilisez l'autoloading et des namespaces
// gestion chambre suite réservation et actualisation pour Voyageur

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



    // Ajoutez ici d'autres méthodes comme create, update, delete, etc.
}

// Supposons que $db est votre objet de connexion à la base de données
$roomController = new RoomController($db);

// Appeler une méthode du contrôleur, par exemple pour afficher les chambres
// $rooms = $roomController->index();
// Afficher les chambres à l'aide d'une vue ou d'un template, par exemple
