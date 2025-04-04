<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <header>
        <h1>resultado da pesquisa</h1>
    </header>

    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "é um grande prazer te conhecer $n $s";
        ?>
        <p><a href="javascript:history.go(-1)">Volta para a página anterior</a></p>
    </main>
</body>
</html>