<?php

$array = array();
$array = $_POST["item"] ?? [];

// Incluir na array
// $array[] = $item;
// array_push($array, $item);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Array</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="card">
                        <div class="card-header">
                            Variavel array
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="item[]">
                            <input type="text" class="form-control mt-3 " name="item[]">
                            <input type="text" class="form-control mt-3 " name="item[]">
                            <input type="text" class="form-control mt-3 " name="item[]">
                            <input type="text" class="form-control mt-3 " name="item[]">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class=" btn btn-primary">Incluir</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Resultado
                    </div>
                    <div class="card-body">
                        <ul>
                            <?php
                            // array não funciona "echo"
                            // var_dump($array)
                            // for($i=0; $i < count($array); $i++){
                            //     echo "<li> $array[$i]</li>";
                            // }

                            foreach (array_filter($array) as $key => $value) {
                                echo "<li> $value - posição $key</li>";
                            }

                            ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>