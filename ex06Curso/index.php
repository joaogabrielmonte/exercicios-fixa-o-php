<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>anatomia de uma divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_POST['div1'] ?? 0;
        $divisor1 = $_POST['div2'] ?? 1;
    ?>

    <main>
        <h1>anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">dividendo</label>
            <input type="number" name="div1" min="0"id="div1"<?$dividendovalor?>>
            <label for="divisor">dividendo</label>
            <input type="number" name="div2" min="1" id="div2"<?$divisor1?>>
            <input type="submit" value="analisar">
        </form>
    </main>

    <section id="resultado">
        <h3>resto da divisão</h3>
        <?php 

        //calculos
           $quociente = intdiv($dividendo, $divisor1);
           $resto = $dividendo % $divisor1;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor1?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
</body>
</html>