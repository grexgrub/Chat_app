<?php

namespace App\Controllers;


use App\Models\pesanModel;
use App\Models\user;
use CodeIgniter\Files\File;



class Home extends BaseController
{    
    

public function __construct()
{
        $this->pesan = new pesanModel();
        $this->user = new user();
  }

public function index() 
  {
        $contact = $this->user->getUser();
        $data = [
          'title' => 'pesan-app',
          'contact' => $contact,
        ];
        if (session('username')){
          return view('app/home', $data);
        }
        redirect()->to('Login');

  }

public function pesan_room($username)
  { 
        $nama = $this->user->getMe($username); 
        $isi_pesan = $this->pesan->getPesan(session('username'), $username);        
        $me = $this->user->getMe(session('username'));
        $data = [ 'title' => 'pesan-app','me' => $me, 'pesan' => $isi_pesan, 'nama' => $nama, 'username' => $username];
        return view('app/pesan',$data);  
  }

public function send_pesan()
{


    $pesan = $this->request->getVar();
    $data = [
      'pesan' => $pesan
    ];
    if ($pesan['me'] == session('username')){    
    $this->pesan->save([ 'pesan' => $this->request->getVar('pesan'),
      'dari' => $pesan['me'], 'ke' => $pesan['username']
    ]);
    return redirect()->back();
    }else{
        return redirect()->back();

    }
  }

public function detail($username,$validate = null){ 
    $data = [
      'me' => $this->user->getMe($username),
      'title' => 'detail ku',
      'valid' => $validate
    ];
    return view('app/detail', $data);
  }

public function friend(){
    $post = $this->request->getVar('data');
    echo json_encode($this->user->getMe($post));
  }

public function edit(){    
    $rule =['PPMU' => [ 
      'rules' => 'uploaded[PPMU]|max_size[PPMU,1024]|is_image[PPMU]|mime_in[PPMU,image/jpeg,image/jpg,image/png,image/webp]',
      'errors' => [
        'uploaded' => 'file tidak sesuai',
        'max_size' => 'ukuran file terlalu besar'
      ]]];
    if(!$this->validate($rule)){
      $validate = $this->validator->getErrors();
      return $this->detail(session('username'),$validate);
    }
    $file = $this->request->getFile('PPMU');
    $filename = $file->getRandomName();
    $file->move('img/avatar/',$filename);
    $this->user->set('photoProfile',$filename)->where('username',session('username'))->update();
    return redirect()->back(); 
    

  }

  public function realtimePesan(){

    $from = $this->request->getVar('from');
    $to = $this->request->getVar('to');

    $data = $this->pesan->getPesan($from,$to);

    $output = ''; 
    function a($data,$output){      
    foreach ( $data as $pesan ){
      if ($pesan['dari'] == session('username')){
            $output = $output.'<div class="pesan get"><div class="isi">'. $pesan['pesan'] .'</div></div>';
      }else{
            $output = $output.'<div class="pesan send"><div class="isi">'. $pesan['pesan'] .'</div></div>';   
      }
    }
      return $output;
    } 


    return a($data,$output);



  }







}
