<?php
$editpost = $_POST['editpost'];

if (isset($_POST['id'])) $id = $_POST['id'];
else if (isset($_POST['editpostpost'])) $id = $_POST['editpostpostt'];
else echo 'нет ID';
$pdo = new PDO('mysql:host=localhost;dbname=MarlinProject;charset=utf8',
    'root',
    'root',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$statement = $pdo->query("SELECT * FROM posts WHERE id = '$id' ");
$posts = $statement->fetchAll(PDO:: FETCH_ASSOC);
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
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Редактирование статьи</h1>
    </div>
    <form action="update.php" method="POST">
        <input type="text" name="name"  value="<?=$posts[0]['name']?>"><br><br>
        <input type="hidden" value="<?= $posts[0]['id'] ?>" name="id">
        <textarea name="description" id="" cols="100" rows="10" ><?=$posts[0]['description']?></textarea><br><br>
        <input type="submit" value="Сохранить  статью">
    </form>
    <br>
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg">НАЗАД К СТАТЬЯМ</button></a>
</div>
</body>
</html>