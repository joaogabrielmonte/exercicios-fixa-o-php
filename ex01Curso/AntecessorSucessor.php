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
        <p>
            <?php
            $number = $_GET["numero"];
            echo " o numero escolhido $number \n";
            echo " <br>o seu sucessor é ". $number + 1 . "\n";
            echo " <br>o seu antecessor é " . $number -1;
            ?>
        </p>
        <button type="button" onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>