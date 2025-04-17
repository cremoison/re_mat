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
        if (self::$instance === null) {
            self::$instance = new PDO("", "", "");
        }
        return self::$instance;
    }

}
