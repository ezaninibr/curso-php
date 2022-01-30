<div class="titulo">Desafio PI</div>

<?php
echo pi() . "<br>";
$pi = 3.14;

if(($pi - pi()) <= 0.001){
    echo "Praticamente Iguais!";
}else{
    echo "Diferentes...";
}

// Operadores Relacionais
