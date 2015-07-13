<?php
include_once "model.php";
include_once "./setting.php";
class visitatore  {
    public $pdo;
    
      public function __construct() {
          try {
              $this->pdo = new PDO ('mysql:host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER ,$DB_PSW);
          } catch (PDOException $ex) {

          }
      }
    
      public function login($username, $password) {
          $query = "SELECT * FROM visitatori WHERE username=:username and psw=:psw";
          $sth = $this->pdo->prepare($query);
          $sth->bindParam(":username", $username);
          $sth->bindParam(":psw", $password);
          $sth->execute();
          return $sth->fetch(PDO::FETCH_CLASS);
      }
      
    
}
