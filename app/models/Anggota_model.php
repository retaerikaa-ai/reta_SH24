<?php
class Anggota_model {
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAll(){
        return $this->conn->query("SELECT * FROM anggota");
    }

    public function insert($data){
        $stmt = $this->conn->prepare("INSERT INTO anggota 
        (nomor_anggota, nama, alamat, telepon, email, tanggal_daftar, status)
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssss",
            $data['nomor_anggota'],
            $data['nama'],
            $data['alamat'],
            $data['telepon'],
            $data['email'],
            $data['tanggal_daftar'],
            $data['status']
        );

        return $stmt->execute();
    }

    public function getById($id){
        $stmt = $this->conn->prepare("SELECT * FROM anggota WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $data){
        $stmt = $this->conn->prepare("UPDATE anggota SET
            nomor_anggota=?,
            nama=?,
            alamat=?,
            telepon=?,
            email=?,
            tanggal_daftar=?,
            status=?
            WHERE id=?");

        $stmt->bind_param("sssssssi",
            $data['nomor_anggota'],
            $data['nama'],
            $data['alamat'],
            $data['telepon'],
            $data['email'],
            $data['tanggal_daftar'],
            $data['status'],
            $id
        );

        return $stmt->execute();
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM anggota WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}