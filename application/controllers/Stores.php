<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        //CARREGAR EL MODEL
        $this->load->model('Stores_model');
        
    }
    
    public function prova(){
        echo "funcion prova";
    }


    public function index() {
        
        //No hem de escriure mai amb un echo
        echo "Hola és la funció d'entrada del controlador.";
        
        $titulo="Este és el títol de la primera pàgina.";
        $cuerpo="Este és el cos de la meua pàgina.";
        
        $datos=array(
            'titulo'=>$titulo,
            'cuerpo'=>$cuerpo
          );
        
        /*UN ALTRA FORMA DE ASIGNAR-HO
        $datos['titulo']=$titulo;
        $datos['cuerpo']=$cuerpo; */
        
        //HEM DE CRIDAR AL MODEL
               
        $datos['stores']=$this->Stores_model->getAllStores();
       // print_r($datos);
        
        
        
        //ANEM A CRIDAR A UNA VISTA 
        $this->load->view('vista', $datos); //El nom de la vista és obligat.
        //Crida a la vista i li pases eixes dades.
        
        
        
        
        
    }
    
	
}