<?php
require_once './vendor/autoload.php';
class Repository {

    private $db;

    function __construct($db){
        $this->db = $db;
    }

    function query($q) {
        /**
         * @todo
         * 
         * ========== ESERCIZI PER CASA ==========
         *
         * Rifattorizza per usare .env
         * 
         * Non istanziare ogni volta una nuova connessione (lento e poco sicuro), piuttosto passa un'istanza di PDO
         * al costruttore oppure istanzia PDO direttamente nel costruttore e sempre lì runni la connessione così
         * approfitti dei vantaggi dell'approccio a oggetti poi se non hai capito bene cosa intendo ti do una mano
         * 
         * Come conseguenza di usare PDO: impara cos'è il binding dei valori nelle query (serve a prevenire SQL injection)
         * 
         * 
         * ========== APPUNTI VARI ==========
         * 
         * Non usare mysqli ma PDO (migliore e più sicuro)
         * 
         * I todo segnali con la chiocciola @todo così l'editor te li evidenzia e ti avvisa prima di committare
         * 
         * 
         * fammi sapere se hai bisogno di aiuto, non c'è niente di male nel chiedere a chi ha più know how (parte fondamentale di questo lavoro)
         * - egi
         */


        // using mysqli object-oriented

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully to database.";
        $result = $conn->query($q);
        if($result->num_rows > 0) {  // so if the query result in a not-empty filtered selection ...
            return $result; // @TODO return the result of the query as a self-made array and not the whole object
        }
    }

}

?>