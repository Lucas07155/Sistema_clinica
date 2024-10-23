 <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php  
require 'conexao.php';
$nome_paciente = $_POST['nome_paciente'];
$sql = $pdo->prepare("DELETE FROM agendamentos WHERE nome_paciente = :nome_paciente");
$sql->bindValue(':nome_paciente', $nome_paciente);
$sql->execute();
header("Location:consultas_marcadas.php");
exit;
?>
