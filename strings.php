<?php 

$idade = 25;

//Método de concatenação - aspas simples com o ponto final para ligar string à variável
echo 'Olá, mundo! Minha idade é ' . $idade . ' anos.';

// método de template string - aspas duplas, apenas chamando a variável normalmente
echo "Olá, mundo! Minha idade é $idade anos.";

//realizar qubre de linha com \n, precisa de aspas duplas

echo "Olá, mundo! \n";
echo "meu nome é Leonardo \n";
//ou
echo "Olá, mundo!";
echo "\n";
echo "meu nome é Leonardo";
echo "\n";
//ou 
echo "Olá, mundo!" . PHP_EOL;
echo "meu nome é Leonardo" . PHP_EOL;

//colocar parágrafo com tab
echo "\t Olá mundo";