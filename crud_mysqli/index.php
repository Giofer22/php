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
                        Lista de ordem de serviço
                        <button class="btn btn-primary float-end">
                        Adicionar <i class="i bi-plus"></i>
                        </button>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover  table-responsive align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Serviços</th>
                                    <th>R$ Valor</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Giovanni</td>
                                    <td>Manutenção</td>
                                    <td>R$150</td>
                                    <td>
                                        <button class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm "><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>otra pessoa</td>
                                    <td>algo</td>
                                    <td>R$8000</td>
                                    <td>
                                        <button class="btn btn-info btn-sm "><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm "><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
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