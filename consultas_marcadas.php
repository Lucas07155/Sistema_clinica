 <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php
require 'conexao.php';

$sql = $pdo->prepare("SELECT a.id, p.nome, a.data_consulta, a.hora_consulta FROM agendamentos a JOIN pacientes p ON a.id_paciente = p.id");
$sql->execute();
$consultas = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Marcadas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">CONSULTAS MARCADAS</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nome do Paciente</th>
                        <th>Data da Consulta</th>
                        <th>Hora da Consulta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($consultas as $consulta): ?>
                        <tr>
                            <td><?php echo $consulta['nome']; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($consulta['data_consulta'])); ?></td>
                            <td><?php echo $consulta['hora_consulta']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="text-right mt-3">
            <a href="agendar_consulta.php" class="btn btn-sm btn-danger">Agendar Nova Consulta</a>
        </div>
    </div>
</body>
</html>
