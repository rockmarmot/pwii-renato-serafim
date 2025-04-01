<?php
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

echo "<br>";
echo "<br>";

$x = 15;
var_dump($x);

//o var dump mostra o número de digitos em string e em int o número posto como em cima.

echo "<br>";
echo "<br>";

$y = ['Renato', 'Serafim', 100];
var_dump($y);

//O array mostra o número de conteudo da matriz, mostra qual o tipo do conteudo, como string e int.

echo "<br>";
echo "<br>";

$meuObj = new stdclass();
$meuObj->nome = 'Renato';
$meuObj->idade = 16;
$meuJson = json_encode($meuObj);
echo $meuJson


?>