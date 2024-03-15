<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Insira um numero</label>
                        <input id="numero1" type="number" value="<?php echo $numero ?>" class="form-control" name="numero">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary " type="submit"> Contar</button>
                    </div>
                </form>
            </div>
            <div class="col mt-4">
                <?php
                $numero = $_POST["numero"] ?? 0;
                $contador = 1;

                while($contador <= $numero){
                    echo $contador . " ";
                    $contador++;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>