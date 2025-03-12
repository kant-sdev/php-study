<?php 
    // crie um array com 5 cidades e exiba na tela a terceira cidade do array
    $cidades = ['Tokyo', 'Seul', 'Madrid', 'Lisboa', 'Jerusalém'];

    echo $cidades[2] . "</br>";


    // crie um array de alunos onde as chaves são os nomes de tre anulos e os valores são as ideades deles e imprima o valor do segundo aluno
    $alunos = ['Pedro' => 16, 'Ana' => 15, 'Maria' => 15];
    
    echo $alunos['Ana']  . "</br>";

    // crie um array chamados cores contendo 3 cores, adicione um nova cor ao final do array, remova a primeira cor, e retorne o resultado do array
    $cores = ['Vermelho', 'Azul', 'Amarelo'];

    array_push($cores, 'Verde');
    array_shift($cores);
    print_r($cores);


?>