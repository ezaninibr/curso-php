<div class="titulo">Arrays Contantes</div>

<?php
const FRUTAS = ['banana','laranja','melão'];

// FRUTAS[0] = 'maça'; (ERRO)
// FRUTAS[] = 'maça'; (ERRO)

print_r(FRUTAS);

define('CIDADES',array('Belo Horizonte','Rio de Janeiro'));

// CIDADES[] = 'Taubaté'; (ERRO)
echo '<br>' . CIDADES[1];