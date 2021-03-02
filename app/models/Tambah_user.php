<?php

class Tambah_user
{
    private $tabel = 'user';
    private $db;


    public function __construct()
    {
        // code...
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }


    public function getUserById($id)
    {

        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id= ' . $id);

        return $this->db->single();
    }

    public function tambahDataUser()
    {
        $username = $_POST['username'];
        $password = base64_encode($_POST['password']);
        $nama = $_POST['nama'];
        $role = $_POST['role'];

        $query = "INSERT INTO user VALUES ('', '$username', '$password', '$nama', '$role')";
        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {

        // $query = "DELETE FROM mahasiswa WHERE id= '$id' ";
        $this->db->query('DELETE FROM ' . $this->tabel . ' WHERE id= ' . $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataUser($id)
    {

        $username = $_POST['username'];
        $password = base64_encode($_POST['password']);
        $nama = $_POST['nama'];
        $role = $_POST['role'];

        $query = "UPDATE user SET nama= '$nama', username= '$username', password= '$password', role='$role'  WHERE id='$id'";
        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updatepswd($id)
    {
        @$password = base64_encode($_POST['password']);

        $query = "UPDATE user SET password= '$password' WHERE id='$id'";
        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
