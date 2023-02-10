<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>Adicionar usuário</title>
</head>
<body>
<?php
    if (isset($_SESSION['message'])) {
      echo "<p style='color:green'>" . $_SESSION['message'] . "</p>";
      unset($_SESSION['message']);
    }
  ?>

  <?php
    include_once 'DbConnection.php';
    $user = new User($conn);
    
  ?>

  <h1>Cadastro de Usuarios</h1>

  <form action="addUser.php" method="post">
  <label for="nome">nome:</label>
  <input type="text" name="nome" id="nome">
  
  <label for="cpf">cpf:</label>
  <input type="text" name="cpf" id="cpf">
  
  <label for="contato">telefone para contato:</label>
  <input type="text" name="contato" id="contato">
  
  <input type="submit" value="Enviar">
</form>
</body>
</html>



