<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_m extends CI_Model {

    public function get(){
        $data = $this->db->get('jabatan');
        
        return $data->result();
    }

    public function store($data) {
        return $this->db->insert('jabatan', $data);
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('jabatan');

        return $data->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('jabatan', $data);
    }
    
    public function delete($id) {
        return $this->db->delete('jabatan', ['id' => $id]);
    }

}
