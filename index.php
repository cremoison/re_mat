<?php
require_once './vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Router;
use Src\Database;
use Src\Repository;
// use PDO;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//dump($_SERVER);
Router::handle($_SERVER);