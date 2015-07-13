<?php

include_once APP_ROOT.'setting.php';
include_once APP_ROOT.'model/Model.php';

class SediModel extends Model{
    
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
    

    
public function read($COD_SEDE=NULL) {
    //restituisce elenco completo
   try {
       if(empty($COD_SEDE)){
           $query = "SELECT capienza, indirizzo, citta, provincia, telefono, titolo, data_inizio, data_fine, prezzo, COD_SEDE FROM `mostre` INNER JOIN sedi USING (COD_SEDE);";
           $sth = $this->pdo->prepare($query);
           $sth->execute();
           $res = $sth->fetchAll(PDO::FETCH_ASSOC);
       }else{
           $query = "SELECT nome, indirizzo, citta, provincia, telefono, titolo, data_inizio, data_fine, prezzo, COD_SEDE FROM `mostre` INNER JOIN sedi USING (COD_SEDE) WHERE COD_SEDE = :COD_SEDE;";
           $sth = $this->pdo->prepare($query);
           $sth->execute(array('COD_MOSTRA'=>$COD_MOSTRA));
           $res = $sth->fetchAll(PDO::FETCH_ASSOC);

       }


      return $res; 

   } catch (PDOException $exc) {
       echo $exc->getMessage();
   }
   
   
   
}    
    
    
    


}