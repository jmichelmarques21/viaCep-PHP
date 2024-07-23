<?php
  $address = null;
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['cep'])) {
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $response = file_get_contents($url);
    $address = json_decode($response, true);

    if (isset($address['erro']) && $address['erro'] === true) {
      $address = null;
    }
  }
?>
