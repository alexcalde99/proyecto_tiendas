<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
           // echo "HOLA :)";
            	
            //COM EJECUTAR UNA VISTA
          //  $this->load->view('vista'); //Esta cridant a un html o php
                                         //que esta situat en la carpeta 'view'
           
        //PASSAR LES VARIABLES I COM LES RECONEIX EN LA VISTA
        
            //ARRAY ASOCIATIU ES POSICIONA PER NOMS
            $datos['titulo']="LUCIA SERER IVARS"; 
            $datos['cuerpo']="Este és el cos de la nostra pàgina";
            
            $this->load->view('vista', $datos); //ejecuta la vista
            
            
            
            
        }
        
        public function prova() {
            echo "Este és el métode prova.";
        }
}
