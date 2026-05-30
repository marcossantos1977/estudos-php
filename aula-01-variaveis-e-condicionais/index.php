<?php

$nome = "Marcos";
$idade = 49;
$cidade = "Fortaleza";
$profissaoAtual = "Desenvolvedor Junior";
$objetivo = "Desenvolvedor Junior em PHP/Laravel";
$nota = 4;

echo "<h1>Meu primeiro programa PHP</h1>";

echo "Nome: " . $nome;
echo "<br>";

echo "Idade: " . $idade;
echo "<br>";

echo "Cidade: " . $cidade;
echo "<br>";

echo "Profissão Atual: " . $profissaoAtual;
echo "<br>";

echo "Objetivo: " . $objetivo;

echo "<br><br>";

if ($nota >= 7) {
    echo "Resultado: Aprovado.";

} elseif ($nota >= 5 && $nota < 7) {
    echo "Resultado: Recuperação";
    
} else {
    echo "Resultado: Reprovado.";
}
