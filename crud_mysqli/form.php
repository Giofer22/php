<?php
include("../verificar_aut.php");

$pk_cliente = "";
$nome = "";
$cpf = "";
$whatsapp = "";
$email = "";

// veririfca se a variavel existe
if (isset($_GET['ref'])) {
    $pk_cliente = base64_decode(trim($_GET['ref']));
    include('../funcao_conexao_msqli.php');
    $sql = "
        SELECT *
        FROM clientes
        WHERE pk_cliente = $pk_cliente
        ";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_object($query);
        $nome = $row->NOME;
        $cpf = $row->CPF;
        $whatsapp = $row->WHATSAPP;
        $email = $row->EMAIL;
    } else {
        echo "
        <script>
        alert('Registro não encontrado');
        window.location='./';
        </script>
        ";
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Novo cadastro</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <form action="salvar.php" method="post">
                    <div class="card w-50">
                        <div class="card-header fw-bold fs-3">
                            <i class="bi bi-person-fill me-3"></i>Cadastro de cliente
                        </div>
                        <div class="card-body d-flex ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="pk_cliente" class="form-label">ID:</label>
                                        <input value="<?php echo $pk_cliente ?>" readonly type="number" name="pk_cliente" id="pk_cliente" class="form-control ">
                                    </div>
                                    <div class="col-md-10">
                                        <label for="nome" class="form-label">Cliente:</label>
                                        <input value="<?php echo $nome ?>" type="text" name="nome" id="nome" class="form-control" require>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="cpf" class="form-label">CPF:</label>
                                        <input value="<?php echo $cpf ?>" type="text" name="cpf" id="cpf" class="form-control" data-mask="000.000.000-00" require minlength="14">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="whatsapp" class="form-label">Whatsapp:</label>
                                        <input value="<?php echo $whatsapp ?>" type="text" name="whatsapp" id="whatsapp" class="form-control" data-mask="(00) 00000-0000">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email:</label>
                                        <input value="<?php echo $email ?>" type="email" name="email" id="email" class="form-control" require>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-end ">
                            <a class="btn btn-outline-danger" type="button" href="index.php">
                                <i class="bi bi-x"></i> Cancelar
                            </a>
                            <button class="btn btn-success" type="submit">
                                <i class="bi bi-check-all"></i> Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>