<!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
<?php
$pdo = new PDO("mysql:dbname=clinica_medica;host=localhost;port=3307", "root", "lucas123");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>