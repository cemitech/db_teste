<?php
$host = "plataforma.c9rjpaezaf4w.sa-east-1.rds.amazonaws.com";
$user = "postgres";
$password = "75283lhp";
$dbname = "bd_plataforma";
$port ="5432";
// CONECTAR O POSTGRESQL LOGIN NO PHP   
    $dsn = "pgsql:host={$host};dbname={$dbname};port={$port}";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_SILENT, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, "{$user}", "{$password}", $opt);
    //echo "Conectado ao Banco de Dados";
    $con = pg_connect("host=$host dbname=$dbname user=$user password=$password"); // conect para o autocomplete    
    if (!$con) {
       die('Connection failed.');
    }
$pasta = "plataforma";
$from_email = "cemitechlogin@gmail.com";
$reply_email = "cemitechlogin@gmail.com";
?>