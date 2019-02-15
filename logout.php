<?php
/**
 * Created by PhpStorm.
 * User: gleb
 * Date: 15/02/2019
 * Time: 20:08
 */
require ('connect.php');
unset($_SESSION['logged_user']);
header('location: index.php' );