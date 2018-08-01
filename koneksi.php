<?php
class Koneksi{
  private $server="localhost";
  private $username="id6071707_datamahasiswa";
  private $password = "23yoong23";
  private $db = "id6071707_dev2";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
