<?php

$fruits = 'pear, grape, apple, lemon';
$lengthFruits = strlen($fruits); // pega o tamanho da string
$lengthGrape = strlen("grape"); // comprimento de 'grape'

$positionX = strpos($fruits, 'grape'); // encontra a posição de 'grape'
$positionY = strpos($fruits, 'lemon'); // encontra a posição de 'lemon'

echo "The 'grape' starts at position $positionX and the word 'lemon' starts at position $positionY. </br>";

// Pega a palavra 'grape' com base na posição e no comprimento
$grape = substr($fruits, $positionX, $lengthGrape);
echo $grape; // Exibe 'grape'

