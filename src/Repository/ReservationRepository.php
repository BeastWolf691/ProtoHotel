<?php

class ReservationRepository {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findAll() {
        $stmt = $this->db->prepare("SELECT * FROM reservations");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function findById($reservationId) {
        $stmt = $this->db->prepare("SELECT * FROM reservations WHERE id = ?");
        $stmt->bind_param("i", $reservationId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Vous pouvez ajouter ici des méthodes pour ajouter, modifier, et supprimer des réservations

    // Exemple d'une méthode pour ajouter une nouvelle réservation
    public function add($userId, $roomId, $checkIn, $checkOut) {
        $stmt = $this->db->prepare("INSERT INTO reservations (user_id, room_id, check_in, check_out) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $userId, $roomId, $checkIn, $checkOut);
        $stmt->execute();
        return $stmt->insert_id; // Retourne l'ID de la réservation ajoutée
    }

    // Exemple d'une méthode pour modifier une réservation existante
    public function update($reservationId, $userId, $roomId, $checkIn, $checkOut) {
        $stmt = $this->db->prepare("UPDATE reservations SET user_id = ?, room_id = ?, check_in = ?, check_out = ? WHERE id = ?");
        $stmt->bind_param("iissi", $userId, $roomId, $checkIn, $checkOut, $reservationId);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    // Exemple d'une méthode pour supprimer une réservation
    public function delete($reservationId) {
        $stmt = $this->db->prepare("DELETE FROM reservations WHERE id = ?");
        $stmt->bind_param("i", $reservationId);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}