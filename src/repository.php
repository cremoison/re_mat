<?php
require_once './vendor/autoload.php';
class Repository {

    private $db;

    function __constructor($db){
        $this->db = $db;
    }

    function query($q) {

    }

}

?>