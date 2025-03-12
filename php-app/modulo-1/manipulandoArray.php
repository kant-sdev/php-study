<?php 

// Criando um array simples
$fruits = ['pera', 'uva', 'limão'];

echo "Array original:\n";
print_r($fruits);

// Adicionando um item ao final do array
array_push($fruits, 'Melancia');
echo "\nApós adicionar 'Melancia':\n";
print_r($fruits);

// Removendo o primeiro item do array
array_shift($fruits);
echo "\nApós remover o primeiro item ('pera'):\n";
print_r($fruits);

// Removendo o último item do array
array_pop($fruits);
echo "\nApós remover o último item ('Melancia'):\n";
print_r($fruits);

// Adicionando um novo índice específico e modificando um existente
$fruits[0] = 'Maçã'; // Modifica 'uva' para 'Maçã'
$fruits[3] = 'Banana'; // Adiciona 'Banana' no índice 3
echo "\nApós modificar índices:\n";
print_r($fruits);

// Contando elementos do array
$count = count($fruits);
echo "\nTotal de elementos no array: $count\n";

// Verificando se um item existe no array
$search = 'Maçã';
if (in_array($search, $fruits)) {
    echo "\n'$search' foi encontrado no array!\n";
} else {
    echo "\n'$search' não está no array.\n";
}

// Unindo dois arrays
$moreFruits = ['Abacaxi', 'Manga'];
$mergedArray = array_merge($fruits, $moreFruits);
echo "\nApós mesclar arrays:\n";
print_r($mergedArray);

?>
