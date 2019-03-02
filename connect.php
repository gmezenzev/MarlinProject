<?php
/**
 * Created by PhpStorm.
 * User: gleb
 * Date: 13/02/2019
 * Time: 16:17
 */
$pdo = new PDO('mysql:host=localhost;dbname=danilaorlov_gid-pokupok;charset=utf8',
    '045211092_gid',
    '7777777',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
session_start();