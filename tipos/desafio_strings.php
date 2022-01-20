<div class="titulo">Desafio Strings</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual métodos que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne a posição 1?

echo strpos(strtolower("!AbcaBcabc"), "abc");
echo "<br>";
echo stripos("!AbcaBcabc", "abc");