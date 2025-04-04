<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes exerciciot</title>
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 0;
        $numero2 = $_GET['num2'] ?? 0;
        $peso1 = $_GET['p1'] ?? 0;
        $peso2 = $_GET['p2'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">Número</label>
            <input type="number" name="num" id="num"<?=$numero?>>
            <label for="peso1">peso 1</label>
            <input type="number" name="p1" id="p1" <?=$peso1?>>
            <label for="num1">Número</label>
            <input type="number" name="num2" id="num2"<?=$numero2?>>
            <label for="p2">peso 2</label>
            <input type="number" name="p2" id="p2" <?=$peso2?>>
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>resultado Final</h2>

        <?php 
            $mediaAriSim = ($numero  + $numero2) / 2;
            $mediaAriPond = ($numero * $peso1 + $numero2 * $peso2) / ($peso1 + $peso2);
            echo "A media aritmetica simples de $numero com peso $peso1 e $numero2 com peso $peso2 é de" . number_format( $mediaAriSim,2,",", ".")."<br><br>";
            echo "A media aritmetica ponderada de $numero com peso $peso1 e $numero2 com peso $peso2 é de " . number_format( $mediaAriPond,2,",", ".");
        ?>
    </section>
</body>
</html>