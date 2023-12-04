<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
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
        <form action="./insert.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>

            <label for="beneficios">Benefícios:</label>
            <input type="text" id="beneficios" name="beneficios" required>

            <label for="ingredientes">Ingredientes:</label>
            <input type="text" id="ingredientes" name="ingredientes" required>

            <label for="nLote">Número do Lote:</label>
            <input type="text" id="nLote" name="nLote" required>

            <label for="dtFabricacao">Data de Fabricação:</label>
            <input type="date" id="dtFabricacao" name="dtFabricacao" required>

            <button type="submit">Cadastrar</button>
        </form>

        <a href="./index.html">Voltar</a>
    </main>
    <script src="./scriptLP.js"></script>
</body>
</html>
