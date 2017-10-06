<?php
include( "..\\..\\config\\connect.php" );

class Acces
{
  public static function getMysqlConnexion()
  {
    $db = new PDO(
        'mysql:host=BDD-SERVEUR;dbname=BDD-BASE'
        , BDD-USER
        , BDD-MDP
        );
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
}
  
    
// PDOFactory::getMysqlConnexion();