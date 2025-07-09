<?php
   session_start();
   include("conexao.php");

   
   $id_produto = $_GET["id_produto"]; 
   $id_usuario = $_SESSION['id_usuario'];
 
      $comando = $pdo -> prepare("INSERT INTO favoritos (id_usuario, id_produto)
      VALUES(:id_usuario, :id_produto)");
      
      $comando->bindValue(":id_usuario",$id_usuario);    
      $comando->bindValue(":id_produto",$id_produto);   
      $comando->execute();   
  
      header("location:favoritos.php");

      unset($comando);
      unset($pdo);