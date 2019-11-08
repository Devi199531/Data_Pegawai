<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_m extends CI_Model {

    public function get(){
        $data = $this->db->get('unit');
        
        return $data->result();
    }

    public function store($data) {
        return $this->db->insert('unit', $data);
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('unit');

        return $data->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('unit', $data);
    }
    
    public function delete($id) {
        return $this->db->delete('unit', ['id' => $id]);
    }

}
