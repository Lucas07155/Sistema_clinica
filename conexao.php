<?php
$pdo = new PDO("mysql:dbname=clinica_medica;host=localhost;port=3307", "root", "lucas123");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>