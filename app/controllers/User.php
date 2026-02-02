<?php

class User extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['users'] = $this->model('User_model')->getAllUsers();
        
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            if( $this->model('User_model')->addUser($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/user');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/user');
                exit;
            }
        }
    }

    public function delete($id)
    {
        if( $this->model('User_model')->deleteUser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function getUpdate()
    {
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function update()
    {
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            if( $this->model('User_model')->updateUser($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diupdate', 'success');
                header('Location: ' . BASEURL . '/user');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diupdate', 'danger');
                header('Location: ' . BASEURL . '/user');
                exit;
            }
        }
    }

    public function search()
    {
        $data['judul'] = 'Daftar User';
        $data['users'] = $this->model('User_model')->searchUsers($_POST['keyword']);
        
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}
