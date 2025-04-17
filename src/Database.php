<?php

namespace Src;
use PDO;
class Database
{
    private static ?PDO $instance = null; // ? means it can be null

    private function __construct()
    {
    }

    public static function get()
    {
        // ciao dammi un esempio di connessione a pdo in php 8. l'url del database è localhost:8081 e i dati sono root:root
        if (self::$instance === null) {

            $dsn = 'mysql:host=' . $_SERVER['DB_HOST'] . ';port='.$_SERVER['DB_PORT'].';dbname=' . $_SERVER['DB_NAME'] . ';charset=utf8';

            self::$instance = new PDO($dsn, $_SERVER['DB_USER'], $_SERVER['DB_PASS'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        }
        return self::$instance;
    }

}
