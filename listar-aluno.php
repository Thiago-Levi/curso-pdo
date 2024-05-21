<?php

use Thiago\CursoPdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$pdo = ConnectionCreator::createConnection();


$statement = $pdo->query('SELECT * FROM students WHERE ID = 1;');

$studentDataList = $statement->fetch(PDO::FETCH_ASSOC);

print_r($studentDataList);


?>