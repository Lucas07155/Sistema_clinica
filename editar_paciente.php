 <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Consulta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center mb-4">EDITAR CONSULTA</h1>
        <?php 
            require 'conexao.php';
            $nome_paciente = $_REQUEST["nome_paciente"];
            $dados = []; 
            $sql = $pdo->prepare("SELECT * FROM agendamentos WHERE nome_paciente = :nome_paciente");
            $sql->bindValue(":nome_paciente", $nome_paciente);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location:consultas_marcadas.php");
                exit;
            }     
        ?>
        <form action="editando_paciente.php" method="POST">
            <input type="hidden" name="nome_paciente" value="<?=$dados['nome_paciente']; ?>">
            <div class="form-group">
                <label for="data_consulta">Data da Consulta</label>
                <input type="date" class="form-control" name="data_consulta" value="<?=$dados['data_consulta']; ?>" required>
            </div>
            <div class="form-group">
                <label for="hora_consulta">Hora da Consulta</label>
                <input type="time" class="form-control" name="hora_consulta" value="<?=$dados['hora_consulta']; ?>" required>
            </div>
            <button type="submit" class="btn btn-sm btn-danger">Editar Consulta</button>
        </form>
        <br>
        <a href="consultas_marcadas.php" class="btn btn-sm btn-danger">Voltar para lista de consultas</a>
    </div>
</body>
</html>
