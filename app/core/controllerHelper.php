<?php
class controllerHelper{
    public function loadTemplate($viewName, $dataView = array()){
        require 'app/views/template.php';
    }

    public function loadViewInTemplate($viewName, $dataView = array()){
        extract($dataView);
        require 'app/views/'.$viewName.'.php';
    }

    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }
}


?>