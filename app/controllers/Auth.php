<?php
session_start();
class Auth extends Controller
{
    public function index()
    {

        $this->view('templates/header');
        $this->view('register/register');
        $this->view('templates/footer');
    }

    public function login()
    {
        if (isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/');
            die();
        }
        $this->view('templates/header');
        $this->view('login/login');
        $this->view('templates/footer');
    }

    public function registrasiUser()
    {
        $this->model('Auth_model')->register($_POST);
        header('Location: ' . BASEURL . '/Auth');
    }

    public function loginUser()
    {
        if ($this->model('Auth_model')->login() > 0) {
            header('Location: ' . BASEURL . '/');
            die();
        }
    }

    public function logout()
    {
        $this->model('Auth_model')->logout();
        header('Location: ' . BASEURL . '/');
        die();
    }
}
