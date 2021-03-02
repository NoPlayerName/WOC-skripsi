<?php

class Pencarian_model{
  private $tabel = 'som';
  private $tabel2 = 'tom';
  private $db;


  public function __construct()
  {
    // code...
     $this->db = new Database;
  }

    

    public function cariData()
    {
      $keyword = $_POST['keyword'];
      $query = "SELECT * FROM " . $this->tabel . " WHERE nosc = '$keyword' ";
      $this->db->query($query);
      return $this->db->resultSet();
      
            

    }

    public function cariData2()
    {
      $keyword = $_POST['keyword'];
      $query = "SELECT * FROM " . $this->tabel2 . " WHERE nosc =  '$keyword' ";
      $this->db->query($query);
      return $this->db->resultSet();
      
            

    }

}

 ?>
