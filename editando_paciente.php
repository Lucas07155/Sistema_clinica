 <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php 
require 'conexao.php';

$nome_paciente = $_POST['nome_paciente'];
$data_consulta = $_POST['data_consulta'];
$hora_consulta = $_POST['hora_consulta'];

$sql = $pdo->prepare("UPDATE agendamentos SET data_consulta = :data_consulta, hora_consulta = :hora_consulta WHERE nome_paciente = :nome_paciente");
$sql->bindValue(':data_consulta', $data_consulta);
$sql->bindValue(':hora_consulta', $hora_consulta);
$sql->bindValue(':nome_paciente', $nome_paciente);
$sql->execute();

header("Location:consultas_marcadas.php");
exit;
?>
