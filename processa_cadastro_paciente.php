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
    $dataNascimento = new datetime($data_nascimento);
    $dataAtual = new datetime();
    $idade = $dataNascimento->diff($dataAtual)->y;

    if ($idade < 18) {
        header("Location: cadastrar_paciente.php?erro=" . urlencode("O paciente deve ser maior de idade."));
        exit;
    }
    $sql = $pdo->prepare("INSERT INTO pacientes (nome, data_nascimento, email, telefone, endereco, sexo) VALUES (?, ?, ?, ?, ?, ?)");
    if ($sql->execute([$nome, $data_nascimento, $email, $telefone, $endereco, $sexo])) {
        header("Location: cadastrar_paciente.php?sucesso=" . urlencode("Paciente cadastrado com sucesso!"));
        exit;
    } else {
        header("Location: cadastrar_paciente.php?erro=" . urlencode("Erro ao cadastrar paciente."));
        exit;
    }
}
?>
