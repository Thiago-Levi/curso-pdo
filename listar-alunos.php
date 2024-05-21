<?php
require_once 'vendor/autoload.php';
use Thiago\CursoPdo\Model\Student;
use Thiago\CursoPdo\Infrastructure\Persistence\ConnectionCreator;


$pdo = ConnectionCreator::createConnection();


$statement = $pdo->query('SELECT * FROM students;');


$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentObjectList = [];

foreach ($studentDataList as $studentData) {
  $studentObjectList[] = new Student(
                                  $studentData['id'],
                                  $studentData['name'],
            new DateTimeImmutable($studentData['birth_date']));
}


print_r($studentObjectList);



?>