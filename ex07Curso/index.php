<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de Salario</title>
</head>

<body>
    <?php
        $mediaSalarioMinimo = 1380.60;
        $sal = $_POST['sal1'] ?? $mediaSalarioMinimo;
       
    ?>
    <main>

        <h1>Informe Por gentileza seu salario</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="salario">seu Salario(R$)</label>
           <input type="number" name="sal1" id="sal1">
            <p>Considerando o salario mínimo de <strong>R$<?=number_format($mediaSalarioMinimo, 2, ",", ".")?></strong></li></p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>resultado final</h2>
        <?php
         $mediaTotal = intdiv($sal, $mediaSalarioMinimo);
         $restodaDivisao = $sal % $mediaSalarioMinimo;

         echo "quem recebe um salario de R$ ".number_format($sal,2,",",".") . " ganha " . number_format($mediaTotal, 0 ,",",".") ." salarios minimos + " . "R$$restodaDivisao Reais" ;
        ?>
    </section>
</body>

</html>