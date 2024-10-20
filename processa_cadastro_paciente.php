<?php
require 'conexao.php'; // Conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $sexo = $_POST['sexo'];

    $sql = $pdo->prepare("INSERT INTO pacientes (nome, data_nascimento, email, telefone, endereco, sexo) VALUES (?, ?, ?, ?, ?, ?)");
    if ($sql->execute([$nome, $data_nascimento, $email, $telefone, $endereco, $sexo])) {
        header("Location: cadastrar_paciente.php?sucesso=" . urlencode("Paciente cadastrado com sucesso!"));
        exit;
    } 
}
?>
