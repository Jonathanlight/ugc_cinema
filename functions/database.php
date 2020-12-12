<?php

$host = 'localhost:8889';
$dbname = 'ucg_cinema';
$username = 'root';
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    print "ERREUR DATABASE : " . $e->getMessage();
    die;
}

?>
