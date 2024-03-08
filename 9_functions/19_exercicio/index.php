<?php

function isPrime($num) {
    // Verifica se o número é inteiro e maior que 1
    if ($num > 1 && is_int($num)) {
        // Percorre os números de 2 até a raiz quadrada do número fornecido
        for ($x = 2; $x <= sqrt($num); $x++) {
            // Verifica se o número é divisível por algum número nesse intervalo
            if ($num % $x == 0) {
                return false; // Não é primo
            }
        }
        return true; // É primo
    } else {
        return false; // Número inválido ou menor que 2
    }
}

// Teste da função
var_dump(isPrime(2)); // Deve retornar false
