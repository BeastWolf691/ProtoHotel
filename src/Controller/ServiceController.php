<?php

// Namespace et use statements ici si vous utilisez l'autoloading et des namespaces

class ServiceController {

    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        // Récupérer et afficher la liste de tous les services disponibles
        $result = $this->db->query("SELECT * FROM services WHERE available = 1");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function view($serviceId) {
        // Récupérer et afficher les détails d'un service spécifique
        $stmt = $this->db->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->bind_param("i", $serviceId);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } else {
            // Gérer l'erreur
            return null;
        }
    }

    public function book($serviceId, $userId) {
        // Réserver un service pour un utilisateur
        // Assurer que le service est disponible et que l'utilisateur est autorisé

        // Mettre à jour le service comme étant réservé
        $stmt = $this->db->prepare("UPDATE services SET available = 0 WHERE id = ?");
        $stmt->bind_param("i", $serviceId);

        if ($stmt->execute()) {
            echo "Service réservé avec succès.";
            // Ici, vous devriez probablement créer également une entrée dans une table de réservations de services
        } else {
            echo "Erreur lors de la réservation du service.";
            // Gérer l'erreur
        }

        $stmt->close();
    }

    // Ajoutez ici d'autres méthodes comme create, update, delete, etc.
}

// Supposons que $db est votre objet de connexion à la base de données
$serviceController = new ServiceController($db);

// Appeler une méthode du contrôleur, par exemple pour afficher les services
// $services = $serviceController->index();
// Afficher les services à l'aide d'une vue ou d'un template, par exemple
