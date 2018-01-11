<?php
 function conectar(){
     try{
         $pdo = new PDO ("mysql:host=localhost;dbname=mydb","root","" ) or die ("Erro na conexao com o banco");

     }
     catch(PDOException $e)
     {
         echo $e->getMessage();
     }
     return $pdo;
}

?>