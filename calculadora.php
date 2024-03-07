<?php

// pega as variaveis na URL
//? $variaveis = $_GET;


// Numa array usamos var_dump() para verificar seu conteudo
//? var_dump($variaveis);

$numero1 = $_POST["numero1"] ?? 0;
$numero2 = $_POST["numero2"] ?? 0;
$operador =$_POST["operador"] ?? "somar";
if($operador == "somar"){
    
    $resultado = $numero1 + $numero2;
}elseif($operador == "subtrair"){
    $resultado = $numero1 - $numero2;

}elseif($operador == "multiplicar"){
    $resultado = $numero1 * $numero2;

}elseif($operador == "dividir"){
    if($numero2 == 0){
        echo "
        <script>
        alert(IMporssivel!)
        exit();
        </script>
        ";
    }else{

        $resultado = $numero1 / $numero2;
    }

}



?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Numero 1</label>
                        <input id="numero1" type="number" value="<?php echo $numero1?>" class="form-control" name="numero1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">operador</label>
                        <select name="operador" id="operador" class="form-select">
                            <option <?php echo $operador == "somar" ? "selected" : "" ?> value="somar">somar</option>
                            <option <?php echo $operador == "subtrair" ? "selected" : "" ?> value="subtrair">subtrair</option>
                            <option <?php echo $operador == "multiplicar" ? "selected" : "" ?> value="multiplicar">multiplicar</option>
                            <option <?php echo $operador == "dividir" ? "selected" : "" ?> value="dividir">dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label > Numero 2</label>
                        <input id="numero2" type="number" value="<?php echo $numero2?>" class="form-control" name="numero2">
                    </div>
                    <div class="mb-3">
                        <label > Resultado</label>
                        <input id="resultado" type="number" value="<?php echo $resultado?>" class="form-control" readonly >
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger " type="button" onclick="limpaform()"> Limpar</button>
                        <button class="btn btn-primary " type="submit"> Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function limpaform(){
            document.getElementById("numero1").value = ""
            document.getElementById("numero1").focus()
            document.getElementById("numero2").value = ""
            document.getElementById("resultado").value = ""

        }
    </script>
</body>

</html>