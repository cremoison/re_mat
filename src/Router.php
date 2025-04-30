<?php
namespace Src;
class Router
{
    public static function handle(array $request)
    {
        switch ($request['REQUEST_URI']) {
            case '/esempio':
                require 'views/example.php';
                break;
            case '/login':
                require 'views/login.php';
                break;
            case '/logger':
                require 'views/logger.php';
                break;
        }
    }
}
