<div class="titulo">Desafio Switch #01</div>

<form action="#" method="post">
    <input type="text" name="valor">
    <select name="param" id="param">
        <option value="km-milha">KM -> Milha</option>
        <option value="milha-km">Milha -> KM</option>
        <option value="metro-km">Metro -> KM</option>
        <option value="km-metro">KM -> Metro</option>
    </select>
    <button>Converter</button>
</form>

<?php
$valor = $_POST['valor'];
$param = $_POST['param'];
$resultado = 0;

switch ($param) {
    case "km-milha":
        $resultado = number_format(($valor * 1.609), 3, ",", ".");
        echo "<p>Resultado: $resultado Milhas.</p>";
        break;
    case "milha-km":
        $resultado = number_format(($valor / 1.609), 3, ",", ".");
        echo "<p>Resultado: $resultado KM.</p>";
        break;
    case "metro-km":
        $resultado = number_format(($valor / 1000), 3, ",", ".");
        echo "<p>Resultado: $resultado KM.</p>";
        break;
    case "km-metro":
        $resultado = number_format(($valor * 1000), 3, ",", ".");
        echo "<p>Resultado: $resultado Metros.</p>";
        break;
    default:
        break;
}
