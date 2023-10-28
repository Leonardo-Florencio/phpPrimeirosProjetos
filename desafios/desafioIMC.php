<?php 

$pesoEmKg = 75;
$alturaEmMetros = 1.75;

$imc = $pesoEmKg / ($alturaEmMetros**2);

echo "Seu IMC é igual a $imc" . PHP_EOL;

if ($imc < 24.99) {
    echo "Seu IMC/Peso está normal";
} else if ($imc < 29.99) {
    echo "Seu IMC/Peso indicam Sobrepeso";
} else if ($imc < 34.99) {
    echo "Seu IMC/Peso indicam Obesidade grau I";
} else if ($imc < 39.99) {
    echo "Seu IMC/Peso indicam Obseidade grau II";
};