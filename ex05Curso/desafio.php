<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>analisando o numero</h1>
        <?php 
            $num = $_REQUEST["n"] ?? 0;

            echo "<p>analisando o numero <strong>". number_format($num, 3, ",", ".")."</strong> informando pelo usuario:</p>";

            $int = (int) $num;
            $fra = $num - $int;
            echo "<ul><li> a parte inteira do npuumero é <strong>" . number_format($int, 0,",",".")."</strong></li>";
            echo "<li> A parte fracionada do numero é <strong>". number_format($fra,3 ,",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>