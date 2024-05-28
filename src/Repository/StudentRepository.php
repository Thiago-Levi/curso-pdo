<?php
namespace Thiago\CursoPdo\Repository;
use Thiago\CursoPdo\Model\Student;
use DateTimeInterface;

interface StudentRepository{
  public function allStudents(): array;
  public function studentsBirthAt(DateTimeInterface $birthDate): array;
  public function save(Student $student): bool;
  public function remove(Student $student): bool;

}

?>