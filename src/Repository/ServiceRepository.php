<?php

class ServiceRepository {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findAll() {
        $stmt = $this->db->prepare("SELECT * FROM services");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function findById($serviceId) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->bind_param("i", $serviceId);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Ajouter des méthodes pour ajouter, modifier, et supprimer des services
}
