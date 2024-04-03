<?php
include("../verificar_aut.php");
if(isset($_GET['ref'])){
    $pk_cliente = base64_decode(trim($_GET['ref']));

    include('../funcao_conexao_msqli.php');

    $sql = "
        DELETE FROM clientes
        WHERE pk_cliente = '$pk_cliente'
    ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $msg = "registro removido";
    } else {
        $msg = "error: " . mysqli_error($conn);
    }
    echo "
    <script>
        alert('$msg');
        window.location='./';
    </script>
    ";
    exit;
    } else {
    // redireciona para a pagina principal
    header("location: ./");
    exit;
} 
    // redireciona para a pagina principal
    header("location: ./");
    exit;



?>