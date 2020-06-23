<?php
class adminController extends controllerHelper{
    public function login(){
        $data = array();

        $this->loadView('admin-login', $data);
    }

    public function index(){
        if(!isset($_SESSION['login-status'])){
            header('Location:'.BASE_URL.'admin/login');
        }

        $projetoOperator = new Projeto();

        $data = array();
        $data['projects'] = $projetoOperator->getAllProjects();
        

        $this->loadView('admin', $data);
    }

    public function logout(){
        session_destroy();
        header('Location:'.BASE_URL);
    }
}