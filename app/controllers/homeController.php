<?php
class homeController extends controllerHelper{
    public function index(){
        $projetosOperator = new Projeto();
        $data = array();
        $data['projects'] = $projetosOperator->getAllProjects();
        
        $this->loadView('home', $data);
    }
}

?>