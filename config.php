<?php
    define('HOST','127.0.0.1');
    define('USER','devhost');
    define('PASS','Ouro@1992');
    define('BASE','cadastro');

   $conn = new MySQLi(HOST,USER,PASS,BASE);
   
   if (!$conn) 
   {
     die("Houve um erro:".mysql_connect_error());
   }
?>