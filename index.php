<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style/style.css">
  <script type="" src="Commands/modal.js"></script>
  <title>Sistema de Login</title>
</head>

<body>
<div class="main-login">

     <div class="left-login">
      <h1>Faça Login<br>E entre no sistema de relatório!</h1>
      <img src="Imagens/img.svg" class="left-login-image" alt="Img Relatório">
     </div>

<div class="right-login">
  
  <div class="card-login">
    
      <h1>LOGIN</h1>

      <div class="textfield">
          <label for="usuario">Email</label>
          <input type="email" name="usuario" placeholder="Email" maxlength="40">
      </div>

      <div class="textfield">
         <label for="senha">Senha</label>
         <input type="password" name="senha" placeholder="Senha" maxlength="32">
      </div>
         <button class="btn-login">Login</button>
         <button onclick="showModal()" class="btn-register">Não tenho conta</button>
    </div>

      <div class="modal" id="modal">
          <div class="modal-content">

          <span onclick="hideModal()" class="btn-closed-modal">&times;</span>

          <form class="form-modal">
            <h1>Preencha seus dados</h1>
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" name="acao" value="Cadastrar">
           </form>

          </div>
      </div>  
  </div>
</div>
</body>
</html>

<?php
    include('config.php');
    Mysql::login;
?>