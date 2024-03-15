<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabuada</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">Calcular tabuada</div>
                        <div class="card-body">
                            <label for="tabuada" class="form-label">Insira um numero:</label>
                            <input type="number" name="tabuada" id="tabuada" class="form-control" value="<?php echo $numero ?>">
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
                            $numero = $_POST["tabuada"] ?? 0;
                            for ($i = 1; $i <= 10; $i++) {
                                echo $numero . " X " . $i . "=" . $i*$numero ."<br>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>