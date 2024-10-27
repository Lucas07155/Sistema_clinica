 <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php
require 'conexao.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_paciente = $_POST['nome_paciente']; // Captura o nome do paciente
    $data_consulta = $_POST['data_consulta'];
    $hora_consulta = $_POST['hora_consulta'];
    $sql = $pdo->prepare("SELECT nome FROM pacientes WHERE nome = ?");
    $sql->execute([$nome_paciente]);
    $paciente = $sql->fetch();

    if ($paciente) {
        $nome_paciente = $paciente['nome'];
        $sql = $pdo->prepare("INSERT INTO agendamentos (nome_paciente, data_consulta, hora_consulta) VALUES (?, ?, ?)");
        if ($sql->execute([$nome_paciente, $data_consulta, $hora_consulta])) {
            header("Location: agendar_consulta.php?sucesso=" . urlencode("Consulta agendada com sucesso!"));
            exit;
        } else {
            header("Location: agendar_consulta.php?erro=" . urlencode("Erro ao agendar consulta, tente novamente."));
            exit;
        }
    } else {
        header("Location: agendar_consulta.php?erro=" . urlencode("Paciente não encontrado."));
        exit;
    }
}
?>