<?php
/**
 * Created by PhpStorm.
 * User: gleb
 * Date: 06/02/2019
 * Time: 22:26
 */
$pdo = new PDO('mysql:host=localhost;dbname=MarlinProject', 'root', 'root');
$statement = $pdo->query("UPDATE  posts SET description='Привед медвед' WHERE name='заголовок 5' ");
var_dump($statement);