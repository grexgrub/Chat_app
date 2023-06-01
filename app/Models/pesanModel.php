<?php 

namespace App\Models;


use CodeIgniter\Model;

class pesanModel extends Model{
  protected $table = "pesan";
  protected $useTimestamps = true;
  protected $allowedFields = ['dari','ke','pesan'];

  public function getPesan($pengirim,$penerima){
    $me = ["dari" => $pengirim, "ke" => $penerima];
    $you =  ['dari' => $penerima, 'ke' => $pengirim];
    $db = \Config\Database::connect();
    $ke = session('username');
    $sql = 'SELECT * FROM pesan WHERE dari = :dari: AND ke = :ke: OR dari = :ke: AND ke = :dari:';
    $query = $db->query($sql,[
        'dari' => $pengirim,
        'ke' => $penerima
    ]);
   return $query->getResult('array');
    

  }

}
