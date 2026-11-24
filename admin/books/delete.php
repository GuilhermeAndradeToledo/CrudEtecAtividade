<?php
include '../../setup/connect.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$stmt = $pdo->prepare("DELETE FROM books WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
    header('Location: ./select.php');
    exit;
} else {
    echo "Erro ao excluir o registro.";
    header('Location: ./select.php');
    die();
}

?>