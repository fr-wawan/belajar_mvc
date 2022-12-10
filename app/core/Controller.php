<?php
class Controller
{
    public function view($view, $data = [])
    {

        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model;
    }

    public function sessionSet()
    {
        if (isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/');
            die();
        }
    }

    public function sessionNotSet()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASEURL . '/auth/login');
            die();
        }
    }
}
