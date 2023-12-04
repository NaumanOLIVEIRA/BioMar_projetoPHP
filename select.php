<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styleIndex.css">
</head>
<body>

    <header>
        <nav class="barraMenu">
            <a href="./index.html" class="logo">B<span>io</span>M<span>a</span>r</a>
            <ul class="navMenu">
                <li class="navItem"><a href="./index.php">Cadastrar</a></li>
                <li class="navItem"><a href="./select.php">Produtos</a></li>
            </ul>
            <div class="menu">
                <span class="barra"></span>
                <span class="barra"></span>
                <span class="barra"></span>
            </div>
        </nav>
    </header>

    <main>
        <?php
        $banco = "banco.txt";
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 6; 
            unset($lista[count($lista) - 1]);
            $conjunto = 1;
            echo "<table class='tabela'>";
            date_default_timezone_set('America/Sao_Paulo');
            echo "<tr><th>Código</th><th>Nome</th><th>Descrição</th><th>Benefícios</th><th>Ingredientes</th><th>nº Lote</th><th>Dt Fabricacao</th><th>Ações</th></tr>";
            for ($i = 0; $i < count($lista); $i += $informacoes) {
                echo "";
                echo "<tr>";
                echo "<td id = '$conjunto'>$conjunto</td>";
                for ($j = $i; $j < $i + $informacoes; $j++) {
                echo "<td>{$lista[$j]}</td>";
            }
            echo "<td><a href='./delete.php?codigo=$conjunto'><img src='./delete.png' alt='Deletar' title='Deletar registro'></a></td>";
            echo "</tr>";
            $conjunto++;
            }
            echo "</table>";
            echo"<footer id='footer'>";
            echo"</footer>";
        } else {
            echo "<br><br><p align=center>Ainda não há nenhum registro!</p>";
        }
        ?>
        <a href="./index.php">Cadastrar Novo</a>
    </main>
    <script src="./scriptLP.js"></script>
</body>
</html>
