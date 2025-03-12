<?php

// 1. Array Indexado
$names = ['Arthur', 'Jasmine', 'Lucas', 'Note'];

echo "Lista de nomes:\n";
foreach ($names as $name) {
    echo "- $name\n";
}

echo "\n";

// 2. Array Associativo
$person = [
    'name' => 'Arthur',
    'age' => 25,
    'city' => 'São Paulo'
];

echo "Dados da pessoa:\n";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": $value\n";
}

echo "\n";

// 3. Array Multidimensional
$users = [
    'user1' => ['name' => 'Arthur', 'age' => 25, 'city' => 'São Paulo'],
    'user2' => ['name' => 'Jasmine', 'age' => 30, 'city' => 'Rio de Janeiro'],
    'user3' => ['name' => 'Lucas', 'age' => 22, 'city' => 'Belo Horizonte']
];

echo "Lista de usuários:\n";
foreach ($users as $key => $user) {
    echo "Usuário: $key\n";
    foreach ($user as $infoKey => $infoValue) {
        echo "  " . ucfirst($infoKey) . ": $infoValue\n";
    }
    echo "\n";
}

?>
