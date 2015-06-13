<?php

class Administrator_Model extends CI_Model {
    
    public function admin_signin($admin_email,$admin_password){
        
        $admin_password = hash("SHA256",$admin_password);
        $sql = "SELECT * FROM admin 
                WHERE 
                    admin_email='$admin_email'
                AND 
                    admin_password='$admin_password'";
        
        $query = $this->db->query($sql);
        $result = $query->row();
        
        return $result;
    }
}

?>
