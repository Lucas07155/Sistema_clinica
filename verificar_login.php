<?php
require 'conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM administrador WHERE usuario = :usuario AND senha = :senha");
$sql->bindValue(':usuario', $usuario);
$sql->bindValue(':senha', $senha);
$sql->execute();

if ($sql->rowCount() > 0) {
    header("Location: consultas_marcadas.php");
    exit;
} else {
    header("Location: login.php?erro=" . urlencode("Usuário ou senha incorretos tente novamente!"));
    exit;
}
?>
