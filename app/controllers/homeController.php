<?php
class homeController extends controllerHelper{
    public function index(){
        $data = array();

        $this->loadView('home', $data);
    }
}

?>