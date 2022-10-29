<?php
  include 'conexao.php';

  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $senha=$_POST['senha'];

  $comando="INSERT INTO aspire VALUE (NULL,'$nome','$email',md5('".$senha."'))";

  $resulta=mysqli_query($conexao,$comando);
  
  header("location:index.php");


  ?>