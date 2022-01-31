<div class="titulo">Desafio Switch #01</div>

<form action="#" method="post">
    <input type="text" name="valor">
    <select name="param" id="param">
        <option value="km-milha">KM -> Milha</option>
        <option value="milha-km">Milha -> KM</option>
        <option value="metro-km">Metro -> KM</option>
        <option value="km-metro">KM -> Metro</option>
        <option value="cel-fah">Celsius -> Fahrenheit</option>
        <option value="fah-cel">Fahrenheit -> Celsius</option>
    </select>
    <button>Converter</button>
</form>

<?php
$valor = $_POST['valor'];
$param = $_POST['param'];
$resultado = 0;

switch ($param) {
    case "km-milha":
        $resultado = number_format(($valor * 0.6213), 2, ",", ".");
        echo "<p>Resultado: $resultado Milhas.</p>";
        break;
    case "milha-km":
        $resultado = $valor / 0.6213;
        echo "<p>Resultado: $resultado KM.</p>";
        break;
    case "metro-km":
        $resultado = $valor / 1000 ;
        echo "<p>Resultado: $resultado KM.</p>";
        break;
    case "km-metro":
        $resultado = $valor * 1000;
        echo "<p>Resultado: $resultado Metros.</p>";
        break;
    case "cel-fah":
        $resultado = ($valor * 1.8) + 32;
        echo "<p>Resultado: {$resultado}º fahrenheit .</p>";
        break;
    case "fah-cel":
        $resultado = ($valor -32) / 1.8;
        echo "<p>Resultado: {$resultado}º Celsius .</p>";
        break;
    default:
        break;
}
