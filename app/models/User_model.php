<?php

class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getAllUserById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");

        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function insertData($data)
    {

        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $status = htmlspecialchars($data['status']);

        $query = "INSERT INTO " . $this->table . " VALUES ('',:nama,:username,:email,:password,:status)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('status', $status);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $id = htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $status = htmlspecialchars($data['status']);
        $query = "UPDATE " . $this->table . " SET nama=:nama,username=:username,email=:email,password=:password,status=:status WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('username', $username);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('status', $status);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);

        $this->db->execute();
    }
}
