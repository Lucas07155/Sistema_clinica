  <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">CADASTRAR PACIENTE</h1>
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
        <?php endif; ?>
        <form action="processa_cadastro_paciente.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Paciente" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email do Paciente" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-sm btn-danger">Salvar Paciente</button>
        </form>
        <br>
        <a href="agendar_consulta.php" class="btn btn-sm btn-danger">Agendar Consulta</a>
    </div>
</body>
</html>