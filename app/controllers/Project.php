<?php

class Project extends Controller{
    public function index() {
        $data['judul'] = 'Project';
        $this->view('templates/header');
        $this->view('project/index', $data);
        $this->view('templates/footer');
    }
}