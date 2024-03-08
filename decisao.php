<?php

$numero = 12;

// IF e ELSE
if($numero == 1){echo "Janeiro";}
elseif($numero == 2){echo "Fevereiro";}
elseif($numero == 3){echo "Março";}
elseif($numero == 4){echo "Abril";}
elseif($numero == 5){echo "Maio";}
elseif($numero == 6){echo "Junho";}
elseif($numero == 7){echo "Julho";}
elseif($numero == 8){echo "Agosoto";}
elseif($numero == 9){echo "Setembro";}
elseif($numero == 10){echo "Outubro";}
elseif($numero == 11){echo "Novembro";}
elseif($numero == 12){echo "Dezembro";}
else{echo "Invalido";}
echo "<br> <br>";

switch($numero){
    case 1:
        echo "janeiro";
        break;
    case 2:
        echo "fevereiro";
        break;
    case 3:
        echo "março";
        break;
    case 4:
        echo "abril";
        break;
    case 5:
        echo "maio";
        break;
    case 6:
        echo "junho";
        break;
    case 7:
        echo "julho";
        break;
    case 8:
        echo "agosto";
        break;
    case 9:
        echo "setembro";
        break;
    case 10:
        echo "outubro";
        break;
    case 11:
        echo "novembro";
        break;
    case 12:
        echo "dezembro";
        break;

    default:
    echo "invalido";
    break;
}
?>