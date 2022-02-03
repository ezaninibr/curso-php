<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' .  is_array($dados1);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo '<br>' . $dadosCompletos[$indice];

unset($dadosCompletos);
echo '<br>' . $dadosCompletos;

$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$numeros = $impares + $pares;
print_r($numeros);