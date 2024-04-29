<?php

// Namespace et use statements ici si vous utilisez l'autoloading et des namespaces
// permet de vrifier les informations des réservations (client, chbre, dates arrivées et départs etc)

class ReservationController
{

    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create($userId, $roomId, $dateArrival, $dateDeparture)
    {
        // Valider les données de réservation
        // ...

        // Préparer et exécuter la requête SQL pour insérer la réservation
        $stmt = $this->db->prepare("INSERT INTO reservations (user_id, room_id, date_arrival, date_departure) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $userId, $roomId, $dateArrival, $dateDeparture);

        if ($stmt->execute()) {
            echo "Réservation créée avec succès.";
            // Redirection ou autre logique de suivi
        } else {
            echo "Erreur lors de la création de la réservation.";
            // Gérer l'erreur
        }

        $stmt->close();
    }

    public function reserve($roomId, $userId)
    {
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

    public function getAll()
    {
        // Récupérer toutes les réservations
        $result = $this->db->query("SELECT * FROM reservations");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getByUserId($userId)
    {
        // Récupérer les réservations d'un utilisateur spécifique
        $stmt = $this->db->prepare("SELECT * FROM reservations WHERE user_id = ?");
        $stmt->bind_param("i", $userId);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            // Gérer l'erreur
            return null;
        }
    }

    // Ajoutez ici d'autres méthodes comme update, delete, etc.
}

// Supposons que $db est votre objet de connexion à la base de données
$reservationController = new ReservationController($db);

// Appeler une méthode du contrôleur, par exemple pour créer une réservation
// Vous obtiendrez ces informations via $_POST ou une autre source selon votre implémentation
// $reservationController->create($userId, $roomId, $dateArrival, $dateDeparture);
