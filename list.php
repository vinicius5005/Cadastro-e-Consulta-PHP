<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de Usuários</title>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome de Usuário</th>
        <th>CPF</th>
      </tr>
      <?php
        require_once 'DbConnection.php';
        $user = new User($conn);

    $stmt = $user->read();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['cpf'] . '</td>';
        echo '<td>' . $row['contato'] . '</td>';
        echo '</tr>';
    }
  ?>
</table>
</body>
</html>