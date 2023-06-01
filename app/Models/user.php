<?php 

namespace App\Models;

use CodeIgniter\Model;


class user extends Model {

  protected $table = "users";
  protected $useTimeStamps = true;
  protected $allowedFields = ['username', 'name', 'password', 'info', 'photoProfile'];  
  public function getUser(){
    return $this->findAll();
  }  
  public function getMe($me){
    return $this->where('username',$me)->findAll();
  }
 
}

?>
