<?php

 ini_set('display_errors',1);
 error_reporting(E_ALL);
 header('Content-Type: text/html; charset=utf-8');

include "autoload.php";
 
$contaJoao = new ContaCorrente("Joao","1212","343477-9",2000.00);

$contaMaria = new ContaCorrente("Maria","1212","343423-9",6000.00);

$contaJose = new ContaCorrente("Jose","1212","343421-9",1000.00);

$contaJosue = new ContaCorrente("Josue","1212","343453-9",2300.00);

$contaJosinei = new ContaCorrente("Josinei","1212","343483-9",5600.00);

$contaJoselindo = new ContaCorrente("Joselindo","1212","343403-9",500.00);

$contaJoseneyson = new ContaCorrente("Joseneyson","1212","343400-9",900.00);


echo "Temos " . ContaCorrente::$totalDeContas ." contas. ";

echo "<br>";

echo "Taxa vigente para contas: " . ContaCorrente::$taxaOperacao;

echo "<br>";

echo "<h1>Contas Correntes</h1>";

echo "<h2>Conta Corrente: Titular: ".$contaJoao->getTitular()."</h2>";
var_dump($contaJoao);
echo "<br>";

try{
    $contaJoao->transferir(2550,$contaMaria);

}catch(\InvalidArgumentException $error){
    echo $error->getMessage();

} catch (\Exception\SaldoInsuficienteException $error){

    echo $error->getMessage();

    $contaJoao->totalSaquesNaoPermitidos ++;
} 
catch (\Exception $error){
    //var_dump($error->getPrevious());
    echo $error->getPrevious()->getTraceAsString();
//    echo $error->getPrevious()->getMessage();
    //echo $error->getMessage();
}
echo"<br>";
echo "Operações não realizadas: " . ContaCorrente::$operacaoNaoRealizada;
echo"<br>";
var_dump($contaJoao);

$agora = date ('d/m/Y H:i');
echo "<br /> $agora";