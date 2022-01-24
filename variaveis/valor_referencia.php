<div class="titulo">Valor x Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atriuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesmo_valor';

echo "<br>$variavel $variavelReferencia";