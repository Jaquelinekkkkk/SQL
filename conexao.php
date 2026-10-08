<?php
// conexao.php
require 'vendor/autoload.php'; // carrega a biblioteca do MongoDB

// String de conexão local
$uri = "mongodb://localhost:27017";

try {
    // Cria o cliente de conexão
    $cliente = new MongoDB\Client($uri);

    // Seleciona o banco e a coleção
    $banco = $cliente->Logistica;
    $colecao = $banco->entregas;

    // echo "Conectado com sucesso!"; // descomente para testar
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
echo "Conexão OK!";

} catch (Exception $e) {
    die("Erro ao conectar no MongoDB: " . $e->getMessage());
}