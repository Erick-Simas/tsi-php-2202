<?php

$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'erick';
$pass = 'password';

$bd = new PDO($dsn, $user, $pass);

var_dump($bd);
