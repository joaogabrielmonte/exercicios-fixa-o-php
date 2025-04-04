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
        $numero = $_GET['num'] ?? 1;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num"<?=$numero?>>
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>resultado Final</h2>

        <?php 
            $raisQ = $numero ** (1/2);
            $raisC = $numero ** (1/3);

            echo "<p>Analisando o <strong>$numero</strong> temos:</p>";
            echo "<p><li> o resultado da raiz quadrada de <strong>$numero</strong> é </p></li>" . number_format( $raisQ,1,",",".");
            echo "<p><li> o resultado da raiz cubica de <strong>$numero</strong> é </p></li>" . number_format( $raisC,1,",",".");
        ?>
    </section>
</body>
</html>