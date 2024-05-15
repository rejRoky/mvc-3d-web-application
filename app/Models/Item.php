<?php

class Model {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=db;dbname=my_database', 'user', 'password');
    }

    public function getAllModels() {
        $stmt = $this->db->prepare('SELECT * FROM models');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getModelById($id) {
        $stmt = $this->db->prepare('SELECT * FROM models WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createModel($data) {
        $stmt = $this->db->prepare('INSERT INTO models (name, description) VALUES (:name, :description)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->execute();
    }

    public function updateModel($id, $data) {
        $stmt = $this->db->prepare('UPDATE models SET name = :name, description = :description WHERE id = :id');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteModel($id) {
        $stmt = $this->db->prepare('DELETE FROM models WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
