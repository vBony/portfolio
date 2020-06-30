<?php
class Core{
    public function run(){
        $url = '/';
        $params = array();

        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }

        $url = $this->checKRoutes($url);

        if(isset($_GET['url']) && $_GET['url'] != '/'){
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0]."Controller";
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }

            if(count($url) > 0){
                $params = $url;
            }
            

        }else{
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        if(!file_exists('app/controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }

        $controller = new $currentController();
        call_user_func_array(array($controller, $currentAction), $params);  //Essa função serve para executar uma action (método) sem saber o nome dela.

    }


    private function checkRoutes($url){
        global $routes;

        foreach($routes as $pt => $new_url){
            $pattern =  preg_replace('(\{[a-z0-9]{1,}\})' , '([a-z0-9-]{1,})', $pt);
            
            //Identifica os argumentos e substitui por regex
            if(preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1){
                array_shift($matches);
                array_shift($matches);


                //Pega todos os argumentos para associar
                $itens = array();

                if(preg_match_all('(\{[a-z0-9]{1,}\})', $pt, $m)){
                    $itens = preg_replace('(\{|\})', '', $m[0]);
                }

                //Faz a associação
                $arg = array();
                foreach($matches as $key => $match){
                    $arg[$itens[$key]] = $match;
                }

                //Monta a nova URL
                foreach($arg as $arg_key => $arg_value){
                    $new_url = str_replace(':'.$arg_key, $arg_value, $new_url);
                }

                $url = $new_url;
                break;
            }
        }
        
        return $url;
    }
}



?>