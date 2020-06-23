<?php
class projetoController extends controllerHelper{
    public function n($keyname){
        $projetoOperator = new Projeto();

        if(!$projetoOperator->getProjetoFromKeyname($keyname)){
            header('Location: '.BASE_URL.'notfound');
        }else{
            $data['project'] = $projetoOperator->getProjetoFromKeyname($keyname);
            $data['tags'] = explode(',', $data['project']['tags']);

            $this->loadView('projeto', $data);
        }
    }
}