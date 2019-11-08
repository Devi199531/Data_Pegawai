<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('unit_m');
        $this->load->helper('form');
    }

    public function get() {
        $data = $this->unit_m->get();

        echo '<pre>';
        print_r($data);
    }

    public function index() {
        $unit = $this->unit_m->get();
        $this->load->view('header');
        $this->load->view('unit/index', ['unit' => $unit]);
        $this->load->view('footer');
    }

    public function create() {
        $unit = $this->unit_m->get();
        $this->load->view('header');
        $this->load->view('unit/create', ['unit' => $unit]);
        $this->load->view('footer');
    }

    public function store() {
        $data = $this->input->post();

        $result = $this->unit_m->store($data);

        if ($result) {
            redirect('Unit');
        }
    }

    public function edit($id) {
        $unit = $this->unit_m->get_by_id($id);

        $this->load->view('header');
        $this->load->view('Unit/edit', ['unit' => $unit]);
        $this->load->view('footer');
    }

    public function update() {
        $data = $this->input->post();

        $edit = [
            "nama_unit" => $data['nama_unit'],
            ];

        $result = $this->unit_m->update($data['id'], $edit);

        if ($result) {
            redirect('Unit');
        }
    }

    public function delete($id) {
        $result = $this->unit_m->delete($id);
        
        if ($result) {
            redirect('Unit');
        }
    }
}