  <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php
require 'conexao.php';  

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