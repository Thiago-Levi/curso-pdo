<?php 
namespace Thiago\CursoPdo\Infrastructure\Persistence;
use PDO;

class ConnectionCreator
{
  public static function createConnection(): PDO
  {

    $databasePath = __DIR__ . DIRECTORY_SEPARATOR . '/../../../banco.sqlite';
    return new PDO('sqlite:' . $databasePath);

  }
}

?>