<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>CRUD - MSQLI</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Lista de clientes
                        <a class="btn btn-primary float-end" href="form.php">
                            Adicionar <i class="i bi-plus"></i>
                        </a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover  table-responsive align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">CPF</th>
                                    <th class="text-center">Whatsapp</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('../funcao_conexao_msqli.php');
                                $sql = "
                                SELECT pk_cliente, nome, cpf, whatsapp, email
                                FROM clientes
                                ORDER BY nome
                                ";

                                $query = mysqli_query($conn, $sql);

                                // verificar se encontrou os registros
                                if (mysqli_num_rows($query) > 0) {
                                    // laço para listar item a item
                                    while ($row = mysqli_fetch_object($query)) {
                                        echo '
                                        <tr>
                                            <td class="text-center">' . $row->pk_cliente . '</td>
                                            <td class="">' . $row->nome . '</td>
                                            <td class="text-center">' . $row->cpf . '</td>
                                            <td class="text-center">' . $row->whatsapp . '</td>
                                            <td class="text-center">' . $row->email . '</td>
                                            <td class="text-center">
                                                <a 
                                                href="form.php?ref=' . base64_encode($row->pk_cliente) . '" class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></a>
                                                <a onclick= "if(confirm(\'Deseja realmente remover este registro? \'))
                                                {window.location=\'remover.php?ref' . base64_encode($row->pk_cliente) . '\'} "
                                                 href="remover.php?ref=' . base64_encode($row->pk_cliente) . '" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        ';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>