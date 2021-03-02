<?php

class Pencarian extends Controller
{

  public function index()
  {
    if (!isset($_SESSION["username"])) {
      header("location: auth/");
    } else {
      $data['osm'] = array();
      $data['osm2'] = array();
      $this->view('templates/header');
      $this->view('pencarian/index', $data);
      $this->view('templates/footer');
    }
  }

  public function index_user()
  {
    if (!isset($_SESSION["username"])) {
      header("location: auth/");
    } else {
      $data['osm'] = array();
      $data['osm2'] = array();
      $this->view('templates/header_user');
      $this->view('pencarian/index', $data);
      $this->view('templates/footer');
    }
  }



  public function cari()
  {
    if (!isset($_SESSION["username"])) {
      header("location: auth/");
    } else {
      $data['osm'] = $this->model('Pencarian_model')->cariData($_POST);
      $data['osm2'] = $this->model('Pencarian_model')->cariData2($_POST);
      $this->view('templates/header');
      $this->view('pencarian/index', $data);
      $this->view('templates/footer');
    }
  }
  public function cari_user()
  {
    if (!isset($_SESSION["username"])) {
      header("location: auth/");
    } else {
      $data['osm'] = $this->model('Pencarian_model')->cariData($_POST);
      $data['osm2'] = $this->model('Pencarian_model')->cariData2($_POST);
      $this->view('templates/header_user');
      $this->view('pencarian/index', $data);
      $this->view('templates/footer');
    }
  }
}
