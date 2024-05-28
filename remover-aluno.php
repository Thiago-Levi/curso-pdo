<?php 
require_once 'vendor/autoload.php';
use Thiago\CursoPdo\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();


$sqlDelete = 'DELETE FROM students WHERE id = :id;';
$preparedStatement = $pdo->prepare($sqlDelete);
$preparedStatement->bindValue(':id', 999, PDO::PARAM_INT); 
$isExecute = $preparedStatement->execute();

if($isExecute){
  echo("Removido com sucesso");
}



?>