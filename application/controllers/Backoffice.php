<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    public function validate_user() {
        
//        $user=$_POST['Username'];
//        $pass=$_POST['Password'];
        
        
        //utilizando el framwork
        $user =  $this->input->post('Username');
        $pass =  $this->input->post('Password');
        
        echo 'user:' . $user . 'pass:' . $pass;
    }
    
    

    public function prova() {
        echo 'prova del backoffice';
    }

    public function index() {

        echo 'Index del backoffice';

        $view = "Backoffice/login.php";

        //llamamos a la vista
        $this->load->view($view);
    }

}
