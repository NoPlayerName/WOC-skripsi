<?php

class User extends Controller
{

    public function index()
    {
        if (!isset($_SESSION["username"])) {
            header("location: auth/");
        } else {
            $data['judul'] = 'Daftar User';
            $data['usr'] = $this->model('Tambah_user')->getAllUser();
            $this->view('templates/header', $data);
            $this->view('user/index', $data);
            $this->view('templates/footer');
        }
    }



    public function tambah()
    {
        if ($this->model('Tambah_user')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id)
    {


        if ($this->model('Tambah_user')->hapusDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function edit($id)
    {
        $data['usr'] = $this->model('Tambah_user')->getUserById($id);
        $this->view('templates/header');
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }
    public function update($id)
    {
        if ($this->model('Tambah_user')->editDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success');
            header('Location: ' . BASEURL . '/user/edit/' . $id . '');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger');
            header('Location: ' . BASEURL . '/user/edit/' . $id . '');
            exit;
        }
    }

    public function ubahpswd($id)
    {

        if ($this->model('Tambah_user')->updatepswd($id) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success');
            if ($_SESSION["role"] == "admin") {
                header('Location: ' . BASEURL . '/pencarian/index');
            } else {
                header('Location: ' . BASEURL . '/pencarian/index_user');
            }
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger');
            if ($_SESSION["role"] == "admin") {
                header('Location: ' . BASEURL . '/pencarian/index');
            } else {
                header('Location: ' . BASEURL . '/pencarian/index_user');
            }
            exit;
        }
    }
}
