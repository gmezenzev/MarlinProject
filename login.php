<?php
/**
 * Created by PhpStorm.
 * User: gleb
 * Date: 13/02/2019
 * Time: 21:36
 */

error_reporting(-1);
ini_set('display_errors', 'On');
require('connect.php');
if (isset($_POST['login'])) {
    $errors = [];
    if (trim($_POST['username']) == '') {
        $errors[] = 'Введите логин';
    }
    if ($_POST['password'] == '') {
        $errors[] = 'Введите пароль';
    }

    if (empty($errors)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $statement = $pdo->query("SELECT * FROM users WHERE username = '$username'");
        $count = $statement->fetchColumn();
        if ($count == 0) $errors[] = 'Пользователя с таким логином не сущуствует';
        else {
            $statement = $pdo->query("SELECT password FROM users WHERE username = '$username'");
            $posts = $statement->fetchAll();
            $hesh = $posts[0]['password'];
            if (password_verify($password, $hesh)) {
//                $massage = "$username, вы успешно залогинились";
                $_SESSION['logged_user'] = $username ;
                header('location: index.php' );
            }
            else {
                $errors[] = 'Невернай пароль';
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <form class="form-signin" action="login.php" method="POST">
        <h2>Войти</h2>
        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger" role="alert"><?= array_shift($errors); ?></div>
        <?php endif; ?>
        <?php if (!empty($massage)) : ?>
            <div class="alert alert-success" role="alert"><?= $massage; ?></div>
        <?php endif; ?>
        <input type="text" name="username" class="form-control" placeholder="введите имя"
               value="<?= @$_POST['username']; ?>">
        <input type="password" name="password" class="form-control" placeholder="введите пароль"
               value="<?= @$_POST['password']; ?>">
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Войти</button>
        <a href="signup.php" class="btn btn-lg btn-outline-primary btn-block">Зарегистрироваться</a>

    </form>
</div>
</body>
</html>
