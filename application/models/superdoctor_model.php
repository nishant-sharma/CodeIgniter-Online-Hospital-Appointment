<?php

class Superdoctor_Model extends CI_Model {
    
    public function patient_info(){
        
        $this->db->select('*');
        $this->db->from('patient');
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function save_prescription_info($data){
        
        $this->db->insert('treatment',$data);
    }
    
    public function update_patient_progress_info($treatment_id){
        
        $this->db->set('progress',1);
        $this->db->where('treatment_id',$treatment_id);
        $this->db->update('patient');
    }
}

?>
