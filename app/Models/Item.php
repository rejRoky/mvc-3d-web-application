<?php

class Item {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=db;dbname=my_database', 'user', 'password');
    }

    public function getAllItems() {
        $stmt = $this->db->prepare('SELECT * FROM items');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getItemById($id) {
        $stmt = $this->db->prepare('SELECT * FROM items WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createItem($data) {
        $stmt = $this->db->prepare('INSERT INTO items (name, description) VALUES (:name, :description)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->execute();
    }

    public function updateItem($id, $data) {
        $stmt = $this->db->prepare('UPDATE items SET name = :name, description = :description WHERE id = :id');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteItem($id) {
        $stmt = $this->db->prepare('DELETE FROM items WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
