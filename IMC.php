<?php
$altura = $_POST['Altura'];
$peso = $_POST['Peso'];

$IMC=($altura*$altura)/$peso;

echo"seu IMC é ", $IMC

if($IMC<='18.5'){
    echo"Baixo peso";
}
else if($IMC >= '18.5' && $IMC<= '24.9'){
    echo"Peso normal";
}
else if($IMC >= '25' && $IMC<= '29.9'){
    echo"Peso normal";
}
else if($IMC >='30' ){
    echo"Obesidade";
}
