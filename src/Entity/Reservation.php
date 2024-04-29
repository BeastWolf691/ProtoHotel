<?php

class Reservation {
    private $id;
    private $userId;
    private $roomId;
    private $dateArrival;
    private $dateDeparture;

    // Constructeur pour initialiser l'entité Reservation
    public function __construct($id, $userId, $roomId, $dateArrival, $dateDeparture) {
        $this->id = $id;
        $this->userId = $userId;
        $this->roomId = $roomId;
        $this->dateArrival = $dateArrival;
        $this->dateDeparture = $dateDeparture;
    }

    // Getters et Setters pour chaque propriété
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getRoomId() {
        return $this->roomId;
    }

    public function setRoomId($roomId) {
        $this->roomId = $roomId;
    }

    public function getDateArrival() {
        return $this->dateArrival;
    }

    public function setDateArrival($dateArrival) {
        $this->dateArrival = $dateArrival;
    }

    public function getDateDeparture() {
        return $this->dateDeparture;
    }

    public function setDateDeparture($dateDeparture) {
        $this->dateDeparture = $dateDeparture;
    }

    // Vous pouvez ajouter ici des méthodes supplémentaires pour gérer le comportement spécifique des réservations
}

?>
