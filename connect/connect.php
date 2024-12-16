<?php

  try{
    $db=new PDO("mysql:host=localhost;port=4306;dbname=asm;charset-utf8mb4","root","");
   $db->exec("SET NAMES 'utf8mb4'");
   $db->exec("SET CHARSET 'utf8mb4'");

    
  } catch(PDOException $e){
    echo $e->getMessage();  
  }

    ?>