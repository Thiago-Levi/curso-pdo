<?php 
namespace Thiago\CursoPdo\Infrastructure\Repository;

use Thiago\CursoPdo\Infrastructure\Persistence\ConnectionCreator;
use Thiago\CursoPdo\Model\Student;
use Thiago\CursoPdo\Repository\StudentRepository;

class PdoStudentRepository implements StudentRepository{

  private $connection;

  public function __construct()
  {
    $this->connection = ConnectionCreator::createConnection();
  }
  
  public function allStudents(): array{
  
  }

  public function studentsBirthAt(DateTimeInterface $birthDate): array{

  }

  public function save(Student $student): bool{

  }
  public function remove(Student $student): bool{

  }

}

?>