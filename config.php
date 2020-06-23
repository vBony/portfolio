<?php
include 'enviroment.php';
$config = array();

if(ENVIROMENT == 'development'){
    define("BASE_URL", "http://localhost/portfolio/");
    // $config['host'] = '';
    // $config['dbname'] = '';
    // $config['dbuser'] = '';
    // $config['dbpass'] = '';
}


// global $db;
// try{
//     $db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
// }catch(PDOExcecption $e){
//     echo "Error: ".$e->getMessage();
// }



?>