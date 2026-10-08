<?php
require 'conexao.php';

// Busca todos os documentos da coleção "usuarios"
$entregas = $colecao->find();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Entregas - MongoDB</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        h1 { color: #333; }
        table { border-collapse: collapse; width: 100%; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #4CAF50; color: white; }
        tr:nth-child(even) { background: #f9f9f9; }
    </style>
</head>
<body>

    <h1>📋 Lista de Entregas (MongoDB)</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Valor</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregas as $e): ?>
                <tr>
                    <td><?= $e['_id'] ?></td>
                    <td><?= htmlspecialchars($e['valor'] ?? '') ?></td>
                    <td><?= htmlspecialchars($e['cliente'] ?? '') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>