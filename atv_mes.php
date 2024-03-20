<?php
$numero = $_POST["numero"] ?? 0;

function mes($numero)
{
    if ($numero == 1) {
        echo "Janeiro";
    } elseif ($numero == 2) {
        echo "Fevereiro";
    } elseif ($numero == 3) {
        echo "Março";
    } elseif ($numero == 4) {
        echo "Abril";
    } elseif ($numero == 5) {
        echo "Maio";
    } elseif ($numero == 6) {
        echo "Junho";
    } elseif ($numero == 7) {
        echo "Julho";
    } elseif ($numero == 8) {
        echo "Agosoto";
    } elseif ($numero == 9) {
        echo "Setembro";
    } elseif ($numero == 10) {
        echo "Outubro";
    } elseif ($numero == 11) {
        echo "Novembro";
    } elseif ($numero == 12) {
        echo "Dezembro";
    } else {
        echo "Invalido";
    }
    echo "<br> <br>";
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
                        <div class="card-header">MÊS</div>
                        <div class="card-body">
                            <label for="">Digite o mes</label>
                            <input type="number" name="numero" class="form-control mb-3" value="<?php echo $numero ?>">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">MÊS</div>
                    <div class="card-body">
                        <?php
                        echo mes($numero)
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>