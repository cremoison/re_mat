<?php

use Src\Database;
use Src\Repository;

// receive data from user
if (isset($_POST["login"])) {

    $password = $_POST["password"];
    $email = $_POST["email"];

    $repo = new Repository(Database::get());
    $test = $repo->validate($email, $password);

    dump($test);
}


?>