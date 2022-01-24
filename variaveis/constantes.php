<div class="titulo">Constantes</div>

<?php
define('TAXA_JUROS',2.5);
echo TAXA_JUROS .  "<br>";
// echo "<br> $TAXA_JUROS";
// TAXA_JUROS = 2.5;

const NOVA_TAXA = 3.9;
echo NOVA_TAXA . "<br>";

$valorVariavel = 2.8;
// define('NOVISSIMA_TAXA', $valorVariavel); - OK
// const NOVISSIMA_TAXA = $valorVariavel; - GERA ERRO.
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo "<br>" . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Lina: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretório: ' . __DIR__;