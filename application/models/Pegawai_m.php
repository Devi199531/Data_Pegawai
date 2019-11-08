<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {

    public function get_jabatan() {
        $this->db->select('pegawai.id, '
                . 'pegawai.nama, '
                . 'pegawai.tempat_lahir, '
                . 'pegawai.tanggal_lahir, '
                . 'jabatan.name,'
                . 'unit.nama_unit');
        $this->db->from('pegawai');
        $this->db->join('jabatan', 'pegawai.jabatan_id = jabatan.id');
        $this->db->join('unit', 'pegawai.unit_id = unit.id');
        $data = $this->db->get();

        return $data->result();
    }

    public function store($data) {
        return $this->db->insert('pegawai', $data);
    }

    public function get_by_id($id) {
        $this->db->where('id', $id);
        $data = $this->db->get('pegawai');

        return $data->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pegawai', $data);
    }
    
    public function delete($id) {
        return $this->db->delete('pegawai', ['id' => $id]);
    }
}
