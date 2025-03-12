<?php 
    // tipos numerios não usam aspas,
    $age = 30;

    echo "Idade: $age"; 
    // podemos aplicar operações matematicas com os simbolos padrão das linguagens

    $sum = $age + 5;
    echo "Soma: $sum";
    echo "</br>";
    
    $sub = $age - 5;
    echo "Subtração: $sub";
    echo "</br>";

    $mult = $age * 2;
    echo "Multiplicação: $mult";
    echo "</br>";

    $div = $age / 2;
    echo "Divisão: $div";
    echo "</br>";

    // no php mesmo informando o numero dentro de aspas ele vai tratar number por conseguir entender que ali tem um numero, mas se for uma string, de fato com textos e coisas do tipo, ele acusará erro.
    // Então devemos sempre trabaklhar com os tipos corretos


?>