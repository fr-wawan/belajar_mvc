<?php

session_start();
class Home extends Controller
{
    public function index()
    {
        $this->sessionNotSet();
        $data['user'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $this->sessionNotSet();
        $this->view('templates/header');
        $this->view('insert/index');
        $this->view('templates/footer');
    }

    public function tambahUser()
    {
        $this->sessionNotSet();
        if ($this->model('User_model')->insertData($_POST) > 0) {
            header('Location: ' . BASEURL . '/');
            die();
        }
    }

    public function ubah($id)
    {
        $this->sessionNotSet();
        $data['user'] = $this->model('User_model')->getAllUserById($id);
        $this->view('templates/header');
        $this->view('update/index', $data);
        $this->view('templates/footer');
    }

    public function ubahUser()
    {
        $this->sessionNotSet();
        if ($this->model('User_model')->ubahData($_POST) > 0) {
            header('Location: ' . BASEURL . '/');
            die();
        }
    }

    public function hapus($id)
    {
        $this->sessionNotSet();
        $data['user'] = $this->model('User_model')->hapusData($id);
        header('Location: ' . BASEURL . '/');
        die();
    }
}
