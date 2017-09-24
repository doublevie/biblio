<?php

if(!isset($_COOKIE['ADMIN']) ||  $_COOKIE['ADMIN'] !== '1') {
include 'login.php';
die();
}

 ?>
