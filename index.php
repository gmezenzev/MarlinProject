<?php

$pdo = new PDO('mysql:host=localhost;dbname=MarlinProject', 'root', 'root');
$statement = $pdo->query("SELECT * FROM posts  ");
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
        <h1>Мои статьи</h1>
    </div>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4 ">
                <h2><?php echo $post["name"] ?></h2>
                <p><?php echo $post["description"] ?></p>
                <a href="#">Читать далее</a>
                <div class="d-flex justify-content-around">
                    <form action="delete.php" method="POST">
                        <input type="hidden" value="<?php echo $post["id"] ?>" name="id">
                        <input type="submit" value="Удалить">
                    </form>
                    <form action="edit.php" method="POST">
                        <input type="hidden" value="<?php echo $post["id"] ?>" name="id">
                        <input type="submit" value="Редактировать">
                    </form>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <h4>Добавление статьи</h4>
            <form action="create.php" method="POST">
                <input type="text" name="name" placeholder="Добавьте заголовок статьи"><br><br>
                <textarea name="description" id="" cols="30" rows="10" placeholder="Добавьте статью"></textarea><br><br>
                <input type="submit" value="Добавить статью">
            </form>
        </div>
        <div class="col-md-4">
            <h4>Удаление статьи</h4>
            <form action="delete.php" method="post">
                <select size="1" name="deletepost" required>
                    <option value="1" disabled>Выберите статью</option>
                    <?php foreach ($posts as $post): ?>
                        <option value="<?php echo $post["id"] ?>"><?php echo $post["name"] ?></option>
                    <?php endforeach; ?>
                </select><br><br>
                <input type="submit" value="Удалить">
            </form>
        </div>
        <div class="col-md-4">
            <h4>Правка статьи</h4>
            <form action="edit.php" method="post">
                <select size="1" name="editpost" required>
                    <option value="1" disabled>Выберите статью</option>
                    <?php foreach ($posts as $post): ?>
                        <option value="<?php echo $post["id"] ?>"><?php echo $post["name"] ?></option>
                    <?php endforeach; ?>
                </select><br><br>
                <input type="submit" value="Открыть">
            </form>
        </div>

    </div>


</div>
</body>
</html>