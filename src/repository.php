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
         * Fammi sapere se hai bisogno di aiuto
         * 
         * Imparare cosa, come e quando chiedere aiuto o informazioni è una componente fondamentale di questo lavoro quindi
         * ti conviene abituarti a farlo sia per formazione che per pace mentale
         * 
         * Con questo progetto, per aiutarti a entrare più in fretta nelle dinamiche di scrittura di codice enterprise,
         * simuliamo una dinamica project manager / impiegato. Tratta questi commenti che ti lascio e le issue che ti
         * apro su github (anche in futuro ovviamente) come se fossero parte del processo di code review in ditta, ovvero
         * discutiamone quando necessario, chiedi chiarimenti quando non hai capito cosa è che ti viene contraddetto,
         * se chi ti ha aperto issue ha evidentemente ragione (es. errori di distrazione o di logica) fai e basta ciò che
         * viene consigliato ma quando non sei d'accordo non avere paura di farlo sapere, sia ai tuoi pari che ai tuoi
         * superiori (in generale)
         * 
         * In bocca al lupo e in culo alla balena
         * 
         * - Egi
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