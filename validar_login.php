<?php


if ($_POST) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo "
        <script>
            alert('Preencha todos os campos');
            window.location='./tela_login.php';
        </script>
        ";
        exit;
    } else {
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        include('./funcao_conexao_msqli.php');

        $sql = "
            SELECT pk_usuario, nome FROM usuarios WHERE email LIKE '$email' AND senha LIKE '$senha'
        ";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){

            // criar sessão para variavel global
            session_start();

            // declara variavel informando se o usuario está autenticado
            $_SESSION["autenticado"] = true;

            header('location: ./crud_mysqli');
            exit;
        } else{
            echo "
            <script>
                alert('email e/ou senha inválida');
                window.location='./tela_login.php';
            </script>
            ";
            exit;
        }

    }
} else {
    header('Location: ./tela_login.php');
    exit;
}
