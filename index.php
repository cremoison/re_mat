<?php
require_once './vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Database;
use Src\Repository;
// use PDO;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
// $repo = new Repository($db);

$repo = new Repository(Database::get());
dump($repo->query('SELECT * FROM users'));