<?php
include("../verificar_aut.php");
if(isset($_GET['ref'])){
    $pk_cliente = base64_decode(trim($_GET['ref']));

    include('../funcao_conexao_msqli.php');

    $sql = "
        DELETE FROM clientes
        WHERE pk_cliente = '$pk_cliente'
    ";

    try {
        // enviar pro mysql
        $query = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        echo "Error: " . mysqli_errno($conn);
        if (mysqli_errno($conn) == 1451) {
            $msg = "Não é possivel remover, existe uma Ordem de Serviço cadastrada.";
        }
        echo "
        <script>
            alert('$msg');
            window.location='./';
        </script>
        ";
        exit;
    }


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