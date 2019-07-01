<?php

$server = 'localhost';
$user = 'root';
$pass = 'root0000';
$db = 'geek';

$conn = mysqli_connect($server , $user , $pass , $db);

if(!conn){
    die(mysqli_connect_error());
}