<?php

$num1  = 1.75;
$num2 = 1.65;

$sum = $num1 + $num2;
echo "Soma: $sum </br>";

$subtraction = $num1 - $num2;
echo "Subtracao: $subtraction </br>";

$multiplication = $num1 * $num2;
echo "Multiplicacao: $multiplication </br>";

$division = $num1 / $num2;
echo "Divisao: $division </br>";

// arredondamento
$roundNum = round($division, 2); // recebe dois parametros, um é o valor e o outro é a quantiade de casas decimais que será usada, se não passarmos um valor de casa decimal ele arredondará para um inteiro


echo "Arredondamento: $roundNum </br>";

/*

    observações

    - se for trabalhar com float, usa o . ao invés da virgula
    - se tiver . separando as casas, o numero continuará sendo float, se ele não tiver um . ele se tornará um int
    - uma outra opção é agrupar as operações entre parentese
    -sobre os arredondando, se for para um numero a menos usa o floor
    - se for para um sempre maior usamos a ceil
*/
