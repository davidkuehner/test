<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  const MAIN_CSS = 'mainstyle';
  const USERNAME_KEY = 'username';
  const PASSWORD_KEY = 'password';

 function __construct() {
    parent::__construct();

    $this->load->model('user');
    $this->load->library('layout');
    if( ! $this->layout->ajouter_css($this::MAIN_CSS)) echo "pas de css";
  }

  public function admin() {
    // NON TERMINE
    if(TRUE) {//if is in session
      $this->layout->view('admin');
    }
    else {
    
      $this->form_validation->set_rules($this::USERNAME_KEY, 'Username', 'required');
      $this->form_validation->set_rules($this::PASSWORD_KEY, 'Password', 'required');
      
      if($this->form_validation->run() == FALSE) {
        $data = array(
          $this::USERNAME_KEY => $this::USERNAME_KEY,
          $this::PASSWORD_KEY  => $this::PASSWORD_KEY,
          );
        $this->layout->view('admin_login',$data);
      }
      else {
        $this->layout->view('admin_login');
        }
    }
  
  }
  
  public function test() {
    if($this->user->password_check('root',do_hash('root'))) {
      echo "you're in";
    } 
    else {
      echo "Fail to logged in ";
    }
  }
  
  public function doHash() {
     echo do_hash('root');
  }
  
  private function debug($var) {
      echo '<pre>' ;
      print_r($var) ;
      echo '</pre>'; 
      die();
    }
  
  
}