<?php
// require_once './vendor/autoload.php';

namespace Src;
use PDO;
use Src\DataObjects\User;

class Repository
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function query(string $q): array
    {
        /**
         * @todo
         * 
         * implementare in questo metodo una query al db
         * l'obiettivo è chiamare questo metodo così: $this->query('SELECT * FROM ecc. ecc.') o simili
         * e returna il risultato della query
         * 
         * indizio: PDO_FETCH_ASSOC
         * 
         */
    }

    public function getUserById(int $id): User
    {
        /**
         * @todo
         * 
         * in questo metodo implementare il fetch di un utente in base all'id
         * e returnare l'oggetto di un utente
         * 
         * avrai una roba del tipo:
         * $data = $this->query('SELECT * FROM ecc ecc')
         * 
         * return new User($data['email'] ecc ecc)
         * 
         */
    }

    /**
     * @return User[]
     */
    public function getAllUsers(): array
    {
        /**
         * @todo
         * 
         * esercizio senza indizi: implementa un metodo che restituisce
         * un array con tutti gli utenti del sito presenti a db
         * 
         */
    }

}

?>