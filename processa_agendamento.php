<?php
require 'conexao.php'; // Conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_paciente = $_POST['nome_paciente'];
    $data_consulta = $_POST['data_consulta'];
    $hora_consulta = $_POST['hora_consulta'];
    $sql = $pdo->prepare("SELECT id FROM pacientes WHERE nome = ?");
    $sql->execute([$nome_paciente]);
    $paciente = $sql->fetch();
    if ($paciente) {
        $id_paciente = $paciente['id'];
        $sql = $pdo->prepare("INSERT INTO agendamentos (id_paciente, data_consulta, hora_consulta) VALUES (?, ?, ?)");
        if ($sql->execute([$id_paciente, $data_consulta, $hora_consulta])) {
            header("Location: agendar_consulta.php?sucesso=" . urlencode("Consulta agendada com sucesso!"));
            exit;
        } else {
            header("Location: login.php?erro=" . urlencode("Erro ao agendar consulta."));
            exit;
        }
    } else {
        header("Location: agendar_consulta.php?erro=" . urlencode("Paciente não encontrado."));
        exit;
    }
}
?>
