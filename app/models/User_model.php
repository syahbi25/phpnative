<?php

class User_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get all users
    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // Get user by ID
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Add new user
    public function addUser($data)
    {
        $query = "INSERT INTO " . $this->table . " (nama, email, telepon) 
                  VALUES (:nama, :email, :telepon)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    // Update user
    public function updateUser($data)
    {
        $query = "UPDATE " . $this->table . " SET 
                  nama = :nama,
                  email = :email,
                  telepon = :telepon
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('id', $data['id']);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    // Delete user
    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    // Search users
    public function searchUsers($keyword)
    {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE nama LIKE :keyword 
                  OR email LIKE :keyword 
                  OR telepon LIKE :keyword";
        
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        
        return $this->db->resultSet();
    }
}
