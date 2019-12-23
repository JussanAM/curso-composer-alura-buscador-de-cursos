<?php declare(strict_types=1);

namespace Alura;

require 'autoload.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

$relacionados = array_combine($correntistas, $saldos);

if(array_key_exists("João", $relacionados)){
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado.";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo"<pre>";
var_dump($maiores);
echo"</pre>";

/*

namespace Alura;

require 'autoload.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "luisa",
    "12"
];

echo"<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover("12", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo"</pre>";
_____________________________________________________________________________
$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo"<p>Olá $nome.</p>";
}

$nomesJuntos = implode(", ", $array_nomes);

echo"<p>$nomesJuntos</p>";
_____________________________________________________________________________
$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach($saldos as $saldo){
    echo "<p>O saldo é $saldo.</p>";
}

sort($saldos);

echo"<p>O menor saldo é: $saldos[0].</p>";
_____________________________________________________________________________
require 'Calculadora.php';

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora;
$media = $calculadora->calculaMedia($notas);

if($media){
    echo"<p>A média é: $media.</p>";
} else {
    echo"<p>Não foi possível calcular a média.</p>";
}*/