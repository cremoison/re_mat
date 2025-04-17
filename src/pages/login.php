<?php
include '../Repository.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $repo = new Repository();
    $q = "SELECT password FROM userdata WHERE email = " . $email;
    $db_password = $repo -> query($q);
    if($password = $db_password){
        $_SESSION["id"] = $id;
        // what is user?
        $q = "SELECT usertype FROM userdata WHERE email = " . $email;
        $usertype = $repo -> query($q);
        switch ($usertype) {
            case 1: // consulent
                header("Location: consulent.php");
                exit();
            case 2: // admin
                header("Location: admin.php");
                exit();
            default: // common user
                header("Location: dashboard.php");
                exit();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="email" id="email" required>
        <input type="text" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
</body>