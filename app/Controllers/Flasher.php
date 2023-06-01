<?php


namespace App\Controllers;

class Flasher {
    public static function setFlash($pesan,$aksi,$type,$gambar){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'type' => $type,
            'gambar' => $gambar 
    ];
    

    }
    public static function flash(){
        if(isset($_SESSION['flash'])){
        echo '<div class="alert alert-'.$_SESSION['flash']['type'].' alert-dismissible peringatan d-flex margin-top-10px mx-auto fade show" role="alert">
        <div>
            <img src="'. $_SESSION['flash']['gambar'] .'" alt="alert">
        </div>
        <div class="margin-left-20px">
        <strong>'. $_SESSION['flash']['pesan'].'</strong>'. $_SESSION['flash']['aksi'] .'
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        dd($_SESSION['flash']);
        unset($_SESSION['flash']);
    
       }

    }
}
