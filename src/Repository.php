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

    public function query(string $q, array $binds = []): array
    {
        try {
            //$this->db->query($q);
            $stmt = $this->db->prepare($q);
            if (!empty($binds)) {
                foreach ($binds as $key => $value) {
                    $stmt->bindParam($key, $value);
                }
            }
            $stmt->execute();
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
        $q = "SELECT * FROM users";
        $res = $this->query($q);
        $arr_users = [];

        foreach ($res as $row) {
            $arr_users[] = User::createByQuery($row);
        }
        return $arr_users;
    }

    public function validate(string $email, string $password): ?User
    {
        $binds = [":email" => $email];
        $q = "SELECT * FROM users WHERE email=:email";
        $res = $this->query($q, $binds);
        if (!empty($res)) {
            $data = $res[0];
            if ($data["password"] == $password)
                return User::createByQuery($data);
        }
        return null;
    }

}

?>