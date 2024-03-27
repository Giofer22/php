<?php

// verifica se informação vem
if ($_POST) {
    // pegar informações
    $pk_cliente = trim($_POST["pk_cliente"]);
    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $tel = trim($_POST["tel"]);
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
    $sql = "
    INSERT INTO clientes(nome, cpf, whatsapp, email) VALUES
    ('$nome', '$cpf','$tel', '$email')
    ";

    // enviar pro mysql
    $query = mysqli_query($conn, $sql);

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
