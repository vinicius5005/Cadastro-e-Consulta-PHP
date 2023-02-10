

<head>
   
    <link rel="stylesheet" href="includes/header.css">
    <title>Adicionar usuário</title>
</head>

<?php 
include 'includes/header.html';
?>
    <table>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Contato</th>
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


<?php 
include 'includes/footer.html';
?>