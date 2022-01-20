<div class="titulo">Integração HTML</div>

<h1 center>
    <?php
        echo "Olá ";
        echo "<small>";
        echo "Mundo";
        echo "</small>";
    ?>
</h1>

<?= "<div center azul>Outra forma de me expressar</div>" ?>

<br>
<br>

<div center><button dobro><?= "Legal, PHP no botão" ?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 15 ?>px;
        background-color: #0099FF;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #0099FF;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>