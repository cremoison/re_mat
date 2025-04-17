<?php
require_once './vendor/autoload.php';
class Repository {

    private $db;

    public function __constructor($db){
        $this->db = $db;
    }

    public function query($q) {
        // using mysqli object-oriented
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully to database.";
        $result = $conn->query($q);
        if($result->num_rows > 0) {  // so if the query result in a not-empty filtered selection ...
            return $result; // TO-DO: return the result of the query as a self-made array and not the whole object
        }
    }

}

?>