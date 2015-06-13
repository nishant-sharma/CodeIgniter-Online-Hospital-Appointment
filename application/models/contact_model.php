<?php

class Contact_model extends CI_Model {
    
    public function feedback_save($data){
        
        $this->db->insert('contact',$data);
    }
}

?>
