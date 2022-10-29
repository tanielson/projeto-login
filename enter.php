<?php
include ('conexao.php');

$usuario=$_POST['email'];
$senha=$_GET['senha'];

//Verificar se tem email preenchido e senha vazia
if (empty($usuario) || empty($senha))
{
  exit();
}

$comando="SELECT * FROM login where usuario='$usuario' and senha=('{$senha}')";
$resulta=mysqli_query($conexao,$comando);
$linha=mysqli_run_rows($resulta);

if($linha==1) {
  $_SESSION['usuario']=$usuario;
  header("location:painel.php");
  exit
}
?>