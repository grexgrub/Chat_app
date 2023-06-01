<?php 

namespace App\Controllers;

use App\Models\user;
use App\Controllers\Flasher;
use App\Models\online;

class Login extends BaseController {
  
  public function __construct(){
    $this->auth = new user();
  }
  

  public function login(){
    $data = [
      "title" => "pesan_app"
    ];
    $post = $this->request->getPost();
    $akun = $this->auth->getWhere(['username' => $post['username'], 'password' => $post['password']])->getRow();
    if ($akun){
      $loged_in = [
        'username' => $akun->username,
      ];

      session()->set($loged_in);
    return redirect()->to('/home');
    }
    
      
    return redirect()->back();
  }
  

  public function index(){
    $data = [
      "title" => "Login"
    ];
    if(session('username')){
      return redirect()->to('/home');
    }
    return view('auth/login', $data);
  }
  

  public function logout(){
    session()->remove('username');
    return redirect()->to('/login');
  }
  

  public function register($validate = null){
    $data = ['title' => 'register',
        'validate' => $validate
    ];
      return view('auth/register',$data);
    }


  public function daftar(){
  $data = [
      'username' => $this->request->getVar('username'),
      'name'  => $this->request->getVar('nama'),
      'password' => $this->request->getVar('password')
    ];
  $rule = [
      'username' => 'required|min_length[5]|alpha_numeric',
      'name' => 'required',
      'password' => 'required|min_length[8]'
    ];
    if (! $this->validateData($data,$rule)){
        $validate = [
          'error' => $this->validator->getErrors(),
          'username' => $data['username'],
          'name' => $data['name'],
          'password' => $data['password']
        ];
        return $this->register($validate);
    }
  
  $save = $this->request->getVar();
  $this->auth->save(['username' => $save['username'], 'name' => $save['nama'], 'password' => $save['password']]);
  return redirect()->to('login');
}
  public function updateOnline(){ 
    $this->auth->set('status_on', time())->where('username',session('username'))->update(); 

  }

}
?>





