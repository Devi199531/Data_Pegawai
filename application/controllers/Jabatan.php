<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jabatan_m');
        $this->load->helper('form');
    }

    public function get() {
        $data = $this->jabatan_m->get();

        echo '<pre>';
        print_r($data);
    }

    public function index() {
        $jabatan = $this->jabatan_m->get();
        $this->load->view('header');
        $this->load->view('jabatan/index', ['jabatan' => $jabatan]);
        $this->load->view('footer');
    }

    public function create() {
        $jabatan = $this->jabatan_m->get();
        $this->load->view('header');
        $this->load->view('jabatan/create', ['jabatan' => $jabatan]);
        $this->load->view('footer');
    }

    public function store() {
        $data = $this->input->post();

        $result = $this->jabatan_m->store($data);

        if ($result) {
            redirect('Jabatan');
        }
    }

    public function edit($id) {
        $jabatan = $this->jabatan_m->get_by_id($id);

        $this->load->view('header');
        $this->load->view('jabatan/edit', ['jabatan' => $jabatan]);
        $this->load->view('footer');
    }

    public function update() {
        $data = $this->input->post();

        $edit = [
            "name" => $data['name'],
            ];

        $result = $this->jabatan_m->update($data['id'], $edit);

        if ($result) {
            redirect('Jabatan');
        }
    }

    public function delete($id) {
        $result = $this->jabatan_m->delete($id);
        
        if ($result) {
            redirect('Jabatan');
        }
    }
}