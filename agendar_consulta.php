 <!-- Desenvolvido por [Seu Nome] -->
<!-- DATA [Data Atual] -->
<!-- Professor: Luís Alberto Pires de Oliveira -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Consulta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">AGENDAR CONSULTA</h1>
        
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
        <?php endif; ?>

        <?php if (isset($_GET['erro'])): ?>
            <div class="alert alert-erro"><?php echo $_GET['erro']; ?></div>
        <?php endif; ?>

        <form action="processa_agendamento.php" method="POST">
            <div class="form-group">
                <label for="nome_paciente">Nome do Paciente</label>
                <input type="text" name="nome_paciente" id="nome_paciente" class="form-control" placeholder="Nome do Paciente" required>
            </div>
            <div class="form-group">
                <label for="data_consulta">Data da Consulta</label>
                <input type="date" name="data_consulta" id="data_consulta" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hora_consulta">Hora da Consulta</label>
                <input type="time" name="hora_consulta" id="hora_consulta" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-sm btn-danger">Agendar Consulta</button>
        </form>
        <br>
        <a href="cadastrar_paciente.php" class="btn btn-sm btn-danger">Cadastrar Paciente</a>
    </div>
</body>
</html>
