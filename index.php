<?php
require_once './vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Database;
use Src\Repository;
use PDO;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
// $repo = new Repository($db);
dump($_SERVER["EGIDIO"]);


// :: static -> not-static
$repo = new Repository(Database::get());

$allUsers = $repo->getAllUsers();