<?php
  include_once 'DbConnection.php';
  $user = new User($conn);

  if ($_POST) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $contato = $_POST['contato'];

    if ($user->create($nome, $cpf, $contato)) {
      $message = "Usuário adicionado com sucesso";
      header('Location: cadastrar.php');
    } else {
      $message = "Erro ao adicionar usuário";
      header('Location: cadastrar.php');
    }
  }
?>