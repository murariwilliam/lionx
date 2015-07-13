<?php

include_once APP_ROOT.'setting.php';
include_once APP_ROOT.'model/Model.php';

class MostreModel extends Model{
    
        /**
    * Viene istanziata una classe PDO
     * $this->pdo 
    */
     public $pdo;
    
      public function __construct() {
          try {
              $this->pdo = new PDO ('mysql:host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER ,$DB_PSW);
          } catch (PDOException $ex) {

          }
      }
    

    
public function biglietticliente($cod_visitatore ) {
    //restituisce elenco completo
   try {
           $query = "SELECT * FROM `mostre` where COD_VISITATOREO=:cod_visitatore;";
           $sth = $this->pdo->prepare($query);
           $sth->bindParam(":cod_visitatore", $cod_visitatore);
           $sth->execute();
           $res = $sth->fetchAll(PDO::FETCH_ASSOC);
       


      return $res; 

   } catch (PDOException $exc) {
       echo $exc->getMessage();
   }
   
  
   
}    
    
public function inserimentobiglietto($cod_mostra) {
    $query = "INSERT INTO biglietti (COD_OPERAZIONE, data, fascia_oraria, quantita, tipo_pagamento, COD_MOSTRA, COD_VISITATORE)";
           $sth = $this->pdo->prepare($query);
           $sth->bindParam(":cod_mostra", $cod_mostra);
           $sth->execute();
           $res = $sth->fetchAll(PDO::FETCH_ASSOC);

    
}
    


}