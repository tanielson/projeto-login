<?php
  include('conexao.php');

  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $senha=$_POST['senha'];

  $comando="INSERT INTO login(nome,email,senha) values ('$nome','$email','$senha')";
  $resulta=mysqli_query("$conexao,$comando)";

  if($resulta!=0)
  {
    echo "<script>alert('Foi cadastrado com sucesso')</script>";
    header("Location:indexx.php");
  }
  else
  {
    echo "<script>history.go(-1);alert('Não foi cadastrado')</script>";
  }
