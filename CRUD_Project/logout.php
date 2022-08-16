<?php


if(empty($_SESSION['auth'])){
    header("Location: login.php");
}

session_start();

session_destroy();

header("Location:./index.php");
die;