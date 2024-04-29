<?php

class RoomRepository {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findAll() {
        $stmt = $this->db->prepare("SELECT * FROM rooms");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function findById($roomId) {
        $stmt = $this->db->prepare("SELECT * FROM rooms WHERE id = ?");
        $stmt->bind_param("i", $roomId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Méthodes supplémentaires pour ajouter, modifier et supprimer des chambres
}
