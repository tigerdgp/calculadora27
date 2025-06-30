<?php
  $server_ip_db = $BD_ip;
  $nome_db = $BD_nome;
  $usuario_db = $BD_usuario;
  $senha_db = $BD_senha;

  try {
    $conexao = new PDO("mysql:host=$server_ip_db;dbname=$nome_db", $usuario_db, $senha_db);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso!";
  } catch(PDOException $e) {
    echo "Houve um erro: " . $e->getMessage();
  }  
?>
