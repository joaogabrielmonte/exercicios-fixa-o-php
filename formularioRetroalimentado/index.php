 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio forms RETR</title>
 </head>
 <body>
    <?php 
        //capturar os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>somador de valor</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="valor2">valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">
        </form>
    </main>

    <section id="resultado">
        <h2>resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print " A soma dos valorea $valor1 e $valor2 é igual à $soma";
        ?>
    </section>

 </body>
 </html>