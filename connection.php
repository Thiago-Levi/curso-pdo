<?php 
$pathToDataBase = __DIR__ . DIRECTORY_SEPARATOR . 'banco.sqlite';
$pdo = new PDO('sqlite:' . $pathToDataBase);

echo("CONNECT");

// $pdo->exec('CREATE TABLE students
//            (id INTEGER PRIMARY KEY,
//             name TEXT, 
//             birth_date TEXT);');

?>