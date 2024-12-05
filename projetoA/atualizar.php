<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $novo_nome = $_POST['nome_atualizado'];

    $sql = "UPDATE usuarios SET nome = :novo_nome WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([':novo_nome' => $novo_nome, ':id' => $id]);
        echo "Nome atualizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao atualizar: " . $e->getMessage();
    }
}
?>
