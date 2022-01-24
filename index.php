<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>01 # Início</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio#01</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>02 # Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiro</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Aritiméticas</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=strings">Strings</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=bool">Boolean</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_strings">Desafio Strings</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>02 # Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Básico</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=nomes">Nomenclatura</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>