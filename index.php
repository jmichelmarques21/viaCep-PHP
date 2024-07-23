<?php
  include_once ('viacep.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Consulta CEP</title>
</head>
<body>

  <form action="index.php" method="post">
    <h3>Digite o CEP para encontrar o endereço.</h3>
    <input type="text" placeholder="Digite um cep" name="cep" value="<?php echo isset($_POST['cep']) ? htmlspecialchars($_POST['cep']) : ''; ?>">
    <input type="submit">
    <input type="text" placeholder="Rua" value="<?php echo isset($address['logradouro']) ? htmlspecialchars($address['logradouro']) : ''; ?>">
    <input type="text" placeholder="Bairro" value="<?php echo isset($address['bairro']) ? htmlspecialchars($address['bairro']) : ''; ?>">
    <input type="text" placeholder="Cidade" value="<?php echo isset($address['localidade']) ? htmlspecialchars($address['localidade']) : ''; ?>">
    <input type="text" placeholder="Estado" value="<?php echo isset($address['uf']) ? htmlspecialchars($address['uf']) : ''; ?>">
    <button><a href="index.php">Nova consulta</a></button>
  </form>
  
</body>
</html>
