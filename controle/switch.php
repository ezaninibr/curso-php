<div class="titulo">Switch</div>

<?php
$categoria = "Luxo";
$preco = 0.0;
$carro = "";

switch ($categoria) {
    case "Luxo":
        $carro = "Mercedes";
        $preco = 250000;
        break;
    case "SUV":
    case "SUV BÁSICO":
        $carro = "Renegade";
        $preco = 80000;
        break;
    case "sedan":
        $carro = "Etios";
        $preco = 55000;
        break;
    default:
        $carro = "Mobi";
        $preco = 30000;
        break;
}

$precoFormatado = number_format($preco, 2, ",", ".");

echo "Carro: $carro <br> Preço: R$ $precoFormatado.";