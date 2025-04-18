<?php
// require_once './vendor/autoload.php';

namespace Src;
use PDO;
use Throwable;
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
        try {
            //$this->db->query($q);
            $stmt = $this->db->prepare($q);
            $res = $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            die("Can't connect to database");
        }

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
         *
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