<?php 
use Thiago\CursoPdo\Model\Student;
require_once 'vendor/autoload.php';
use Thiago\CursoPdo\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

$student = new Student(1313, 'Romário', new DateTimeImmutable('2022-08-08'));

$sqlInsert = 'INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);';
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->getName());
$statement->bindValue(':birth_date', $student->getBirthDate()->format('Y-m-d'));

$isExecute = $statement->execute();



if($isExecute){
  echo('Inserido com sucesso');
}


?>