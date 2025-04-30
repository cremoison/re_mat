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
            die($e->getMessage());
        }

    }

    public function getUserById(int $id): User
    {
        $q = "SELECT * FROM users WHERE uid = $id";
        $res = $this->query($q)[0];
        return User::createByQuery($res);
    }


    /**
     * @return User[]
     */
    public function getAllUsers(): array
    {
        $q = "SELECT * FROM USERS";
        $res = $this->query($q);
        $arr_users = [];

        foreach ($res as $row) {
            $arr_users[] = User::createByQuery($row);
        }
        return $arr_users;
    }

}

?>