<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
echo "<br>";
var_dump(1 > 1);
echo "<br>";
var_dump(1 >= 1);
echo "<br>";
var_dump(4 < 23);
echo "<br>";
var_dump(1 <= 7);
echo "<br>";
var_dump(1 != 1);
echo "<br>";
var_dump(1 <> 1);
echo "<br>";

var_dump(1 == '1');
echo "<br>";
var_dump(1 === '1');
echo "<br>";
var_dump(1 != '1');
echo "<br>";
var_dump(1 !== '1');
echo "<br>";

echo "<p class='divisao'>Operadores Relacioanis no IF/ELSE</p><hr>";
$idade = 15;

if ($idade < 18) {
    echo "Menor de idade = $idade anos. <br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos. <br>";
} else {
    echo "Terceira idade = $idade anos.";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(500 <=> 5);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

