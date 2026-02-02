<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = 'MVC CRUD Application';
        
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function about()
    {
        $data['judul'] = 'About';
        $data['nama'] = 'MVC CRUD Application';
        
        $this->view('templates/header', $data);
        $this->view('home/about', $data);
        $this->view('templates/footer');
    }
}
