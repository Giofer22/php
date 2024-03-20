<?php
/* variaveis comuns

$host = "localhost";     // caminho do banco IP ou DNS
$user = "root";     // Usuario
$pass = "";     // senha
$dbname = "ordem_servico";   // Nome do banco
*/
// constante no PHP
define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('dbname', 'ordem_servico');

$conn = mysqli_connect(host, user, pass, dbname);    // variavel que conecta no banco

// testar se funciona a conexão
if ($conn) {
    // echo "foi";
} else {
    echo "não foi";
    exit;
}
