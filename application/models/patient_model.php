<?php

class Patient_model extends CI_Model {
    
    public function entry_save($data){
        
        $this->db->insert('patient',$data);
    }
    
    public function patient_progress_info($treatment_id){
        
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('treatment_id',$treatment_id);
        $query = $this->db->get();
        $result = $query->row();
        
        return $result;
    }
    
    public function patient_total_info($treatment_id){
        
        $this->db->select('*');
        $this->db->from('treatment');
        $this->db->where('treatment_id',$treatment_id);
        $query = $this->db->get();
        $result = $query->row();
        
        return $result;
    }
}

?>
