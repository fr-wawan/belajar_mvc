<?php


class Auth_model
{
    private $table = 'register';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkUserExist($data)
    {
        $checkExist = "SELECT username FROM " . $this->table . " WHERE username ='" . $data . "'";

        $this->db->query($checkExist);

        $this->db->execute();

        return $this->db->rowCount();
    }



    public function register($data)
    {
        $username = strtolower($data['username']);
        $password = $data['password'];
        $password2 = $data['password2'];

        if ($password != $password2) {
            return false;
        }

        if ($this->checkUserExist($username) > 0) {
            return false;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $password2 = password_hash($password2, PASSWORD_DEFAULT);

        $query = "INSERT INTO " . $this->table . " (username,password) VALUES (:username,:password)";

        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM " . $this->table . " WHERE username ='" . $username . "'";

        $result = $this->db->query($query);

        if ($result >= 0) {
            $row = $this->db->single();


            if (password_verify($password, $row['password'])) {

                return $_SESSION['login'] = true;

                $this->db->execute();

                return $this->db->rowCount();
                die();
            } else {
                header('Location:' . BASEURL . '/auth/login');
            }
        }
    }
    public function logout()
    {
        session_destroy();
        session_unset();
    }
}
