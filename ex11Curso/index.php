<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $valorDoProduto = $_GET['preco'] ?? 0;
    ?>
    <main>
        <h2>reajuste de preço</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preço">preçço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.1" <?= $valorDoProduto?>>
            <label for="real">preço do produto (R$)</label>
            <input type="range" name="real" id="real" min="0" max="100"?= $valorDoProduto?>
        </form>
    </main>
</body>

</html>