<?php 
    // exer 01
    $diasDaSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

    $quarta = $diasDaSemana[2];

    echo "O dia da semana é: $quarta";

    // exer 02
    $produtos = [
        'banana' => 0.50,
        'maca' => 1.00,
        'laranja' => 0.75,
        'pera' => 1.25
    ];
    
    $preco = $produtos['banana'];

    echo "O preço da banana é: $preco";

    // exer 03 
    $nums = [2, 3, 4, 1, 5, 6];
    
    $numOrder = sort($nums);

    echo "Números em ordem crescente: ";
    foreach ($nums as $num) {
        echo "$num ";
    }
    
    //  exer 04
    $frutas = ['Limão', 'Laranja', 'Morango'];

    array_push($frutas, 'Melão');
    array_shift($frutas);
    echo "Frutas: ";
    foreach ($frutas as $fruta) {
        echo "$fruta ";
    }

    // exer 05
    $mDimesao = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $meioBid = $mDimesao[0][1];
    echo "Número do meio da matriz bidimensional: $meioBid";
?>