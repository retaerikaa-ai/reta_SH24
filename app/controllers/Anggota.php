<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Anggota_model.php';

class Anggota {
    private $model;

    public function __construct(){
        global $conn;
        $this->model = new Anggota_model($conn);
    }

    public function index(){
        $data = $this->model->getAll();
        include __DIR__ . '/../views/anggota/index.php';
    }

    public function create(){
        include __DIR__ . '/../views/anggota/create.php';
    }

    public function store(){
        // VALIDASI
        if(empty($_POST['nama']) || empty($_POST['email'])){
            echo "Nama & Email wajib diisi!";
            include __DIR__ . '/../views/anggota/create.php';
            return;
        }

        $this->model->insert($_POST);
        header("Location: index.php");
    }

    public function edit($id){
        $result = $this->model->getById($id);
        if(!$result || $result->num_rows == 0) {
            header("Location: index.php");
            exit;
        }
        $data = $result->fetch_assoc();
        include __DIR__ . '/../views/anggota/edit.php';
    }

    public function update($id){
        $id = intval($id);
        if($id <= 0) {
            header("Location: index.php");
            exit;
        }
        $this->model->update($id, $_POST);
        header("Location: index.php");
    }

    public function delete($id){
        $id = intval($id);
        if($id <= 0) {
            header("Location: index.php");
            exit;
        }
        $this->model->delete($id);
        header("Location: index.php");
    }
}