<?php
$banco = "banco.txt";
$conteudo = $_POST["nome"] . "\n" . $_POST["descricao"] . "\n" . $_POST["beneficios"] . "\n" . $_POST["ingredientes"] . "\n" . $_POST["nLote"] . "\n" . $_POST["dtFabricacao"] . "\n";

$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);

if ($criar == true) {
    header('Location: ./index.php');
    exit;
} else {
    echo "Erro ao tentar armazenar dados!";
}

fclose($criar);
?>
