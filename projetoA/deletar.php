<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([':id' => $id]);
        echo "Usuário deletado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao deletar: " . $e->getMessage();
    }
}
?>
