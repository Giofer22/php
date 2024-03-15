<?php
$numero = $_POST["numero"] ?? 0;
$expoente = $_POST["expoente"] ?? 0;

    function expoente($a, $b){
        $calculo = $a ** $b;
        return $calculo;
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Funções</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">Funções</div>
                        <div class="card-body">
                            <label for="">numero</label>
                            <input type="number" name="numero" class="form-control mb-3" value="<?php echo $numero ?>">
                            <label for="">expoente</label>
                            <input type="number" name="expoente" class="form-control mb-3" value="<?php echo $expoente ?>">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">Resultado</div>
                    <div class="card-body">
                        <?php
                        echo expoente($numero, $expoente)
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>