<?php
class ajaxController extends controllerHelper{
    public function login(){
        $ajaxResponse = array();
        $adminOperator = new Admin();

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($adminOperator->loginAdmin($email, $senha) == 'email-invalid'){
            $ajaxResponse['msg'] = 'email-invalid';
            echo json_encode($ajaxResponse);
        }elseif($adminOperator->loginAdmin($email, $senha) == 'pass-invalid'){
            $ajaxResponse['msg'] = 'pass-invalid';
            echo json_encode($ajaxResponse);
        }else if($adminOperator->loginAdmin($email, $senha) == 'done'){
            $_SESSION['login-status'] = 'logado';
            $ajaxResponse['msg'] = 'done';
            echo json_encode($ajaxResponse);
        }
    }

    public function register(){
        $adminOperator = new Admin();

        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $adminOperator->registerAdmin($email, $senha);
    }

    public function projeto(){
        $projetoOperator = new Projeto();
        $ajaxResponse = array();

        if(isset($_POST['action']) && $_POST['action'] == 'criar'){
            $keyname = $_POST['keyname'];
            $nome = $_POST['nome'];
            $desc = $_POST['desc'];
            $tags = $_POST['tags'];

            if($projetoOperator->insertProject($nome, $keyname, $desc, $tags) == true){
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }
        }



        if(isset($_POST['action']) && $_POST['action'] == 'get_to_edit'){
            $id = $_POST['id'];

            echo json_encode($ajaxResponse['project'] = $projetoOperator->getProjeto($id));
        }
        


        if(isset($_POST['action']) && $_POST['action'] == 'editar'){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $keyname = $_POST['keyname'];
            $desc = $_POST['desc'];
            $tags = $_POST['tags'];

            if($projetoOperator->editProject($id, $nome, $keyname, $desc, $tags)){
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == 'deletar'){
            $id = $_POST['id'];

            if($projetoOperator->deleteProject($id)){
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == 'criar-att'){
            $id_projeto = $_POST['id_projeto'];
            $titulo = $_POST['titulo'];
            $desc = $_POST['descricao'];
            $date = $_POST['date'];
            $time = $_POST['hora'];

            if($projetoOperator->insertAtt($id_projeto, $titulo, $desc, $date, $time) == false){
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == 'get_to_edit-att'){
            $id = $_POST['id'];

            echo json_encode($ajaxResponse['att'] = $projetoOperator->getAtt($id));
        }

        if(isset($_POST['action']) && $_POST['action'] == 'editar-att'){
            $id_att = $_POST['id_att'];
            $titulo = $_POST['titulo'];
            $desc = $_POST['descricao'];
            $date = $_POST['date'];
            $time = $_POST['hora'];

            if($projetoOperator->editAtt($id_att, $titulo, $desc, $date, $time) == false){
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }
        }

        if(isset($_POST['action']) && $_POST['action'] == 'deletar-att'){
            $id = $_POST['id'];

            if($projetoOperator->deleteAtt($id)){
                $ajaxResponse['msg'] = 'done';
                echo json_encode($ajaxResponse);
            }else{
                $ajaxResponse['msg'] = 'error';
                echo json_encode($ajaxResponse);
            }
        }
    }
}