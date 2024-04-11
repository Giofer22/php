<?php
include("../verificar_aut.php");
// verifica se informação vem
if ($_POST) {
    // pegar informações
    $pk_cliente = trim($_POST["pk_cliente"]);
    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $whatsapp = trim($_POST["whatsapp"]);
    $email = trim($_POST["email"]);

    // validar dados obrigaorios
    if (empty($nome) || empty($cpf) || strlen($cpf) != 14 || empty($email)) {
        echo
        "<script>
            alert('Falha na validação do formulário');
            window.location='./';
        </script>";
        exit;
    }

    // conectar ao banco
    include('../funcao_conexao_msqli.php');

    // sintax sql que o php envia pro mysql
    if ($pk_cliente > 0) {
        $sql = "
        UPDATE clientes SET
        nome = '$nome',
        cpf = '$cpf',
        whatsapp = '$whatsapp',
        email = '$email'
        WHERE pk_cliente = '$pk_cliente'
        ";
    } else {
        $sql = "
    INSERT INTO clientes(nome, cpf, whatsapp, email) VALUES
    ('$nome', '$cpf','$whatsapp', '$email')
    ";
    }

    try {
        // enviar pro mysql
        $query = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        echo "Error:  $e" . mysqli_errno($conn);
        if (mysqli_errno($conn) == 1062) {
            $msg = "Campo CPF, e-mail e/ou Whatsapp ja foi cadastrado";
        }
        echo "
        <script>
            alert('$msg');
            window.location='./';
        </script>
        ";
        exit;
    }

    // verifica se cadastrou
    if ($query) {
        $msg = "registro salvo";
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
