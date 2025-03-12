<?php

// • Crie script PHP que de
// O Siste.a deve verificar 'e o nore de usuário e
// * x Se ambos estivera corretos, exiba una tensage•
// * Se o no•e de usuário estiver correto. nas a senha
// * Se o noze de usuário estiver incorreto, exiba
// Senha fornecidos estia carretos.
// de boas-vindas.
// estiver errada. exiba ••nsage• de erro de senha.
// Ce erro Se nore Ce usuário.

// $userNameValid = "admin";
// $passwordValid = '123456';

// $username = 'admin';
// $password = '123456';

// if($username != $userNameValid && $password != $passwordValid) {
//     echo "Dados de usuário incorretos";
// } else if($username != $userNameValid && $password == $passwordValid) {
//     echo "Nome de usuário incorreto";
// } else if($username == $userNameValid && $password != $passwordValid) {
//     echo "Senha de usuário incorreto";
// } else {
//     echo "Bem-vindo, $username!";
// } 

// • Exercicio 02
// • Crie script PHP que verifica se pessoa pode entrar ez festa.
// entrar festa. a pessoa precisa ter .en0S anos estar acc•anhada responsável.

$idade = 15;
$idadeAcompanhante = 15;

if($idade >= 18) {
    echo "Você pode entrar na festa";
} else if ($idade < 18 && $idadeAcompanhante >= 18) {
    echo "Voce pode entrar, mas com seu acompanhante";
} else {
    echo "Você não pode entrar na festa e seu acompanhante tem que ser maior de idade";
}
