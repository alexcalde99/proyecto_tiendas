<?php

class Stores_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        //FA LA CONEXIO
        $this->load->database(); //Per a poder gastar totes les funcions de la base de dades
    }

    public function getAllStores() {
        $sql = "SELECT * FROM cg_store ORDER BY store_name";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        
            return $query->result();
               
        }
    }

}

?>