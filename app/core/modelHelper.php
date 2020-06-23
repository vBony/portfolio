<?php
class modelHelper{
    protected $db;
    
    public function __construct(){
        global $db;
        $this->db = $db;
    }
}