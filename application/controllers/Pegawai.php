<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pegawai_m');
        $this->load->model('jabatan_m');
        $this->load->model('unit_m');
        $this->load->helper('form');
    }

    public function get_jabatan() {
        $data = $this->pegawai_m->get_jabatan();

        echo '<pre>';
        print_r($data);
    }

    public function index() {
        $jabatan = $this->pegawai_m->get_jabatan();
        $this->load->view('header');
        $this->load->view('pegawai/index', ['pegawai' => $jabatan]);
        $this->load->view('footer');
    }

    public function create() {
        $jabatan = $this->jabatan_m->get();
        $unit = $this->unit_m->get();
        $this->load->view('header');
        $this->load->view('pegawai/create', ['jabatan' => $jabatan, 'unit' => $unit]);
        $this->load->view('footer');
    }

    public function store() {
        $data = $this->input->post();

        $result = $this->pegawai_m->store($data);

        if ($result) {
            redirect('pegawai');
        }
    }

    public function edit($id) {
        $pegawai = $this->pegawai_m->get_by_id($id);
        $jabatan = $this->jabatan_m->get();
        $unit = $this->unit_m->get();

        $this->load->view('header');
        $this->load->view('pegawai/edit', ['pegawai' => $pegawai, 'jabatan' => $jabatan, 'unit' => $unit]);
        $this->load->view('footer');
    }

    public function update() {
        $data = $this->input->post();

        $edit = [
            "nama" => $data['nama'],
            "tempat_lahir" => $data['tempat_lahir'],
            "tanggal_lahir" => $data['tanggal_lahir'],
            "jabatan_id" => $data['jabatan_id'],
            "unit_id" => $data['unit_id'],
        ];

        $result = $this->pegawai_m->update($data['id'], $edit);

        if ($result) {
            redirect('pegawai');
        }
    }

    public function delete($id) {
        $result = $this->pegawai_m->delete($id);
        
        if ($result) {
            redirect('pegawai');
        }
    }
}
