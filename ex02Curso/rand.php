<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>gerador de numeros aleatorios</title>
</head>

<body>
    <main>
        <?php

        echo "o numero sorteado do meu jeito foi... " . mt_rand(1, 100) . "\n";
        //pode ser usado ou o rand() linear congrential generator
        //mas também utilizamos o mt_rand() mersenne twister 
        //a partir do php 7.1, rand() é um simples apontamento ou seja uma simples forma para mt_rand()
        //caso quisermos um numero aleatório criptograficamente seguro utilizamos o random_int()

        ?>

        <?php
        $minNum = 0;
        $maxNum = 100;
        $numSorteado = mt_rand($minNum, $maxNum);
        echo "<br>o numero sorteado foi... \n";
        echo "$numSorteado";
        //caso quisermos um  fazer de uma forma mais robusta podemos utilizar variaveis
        ?>
        <button onclick="javascript:history.go(-1)">gerar novo número</button>
    </main>
</body>

</html>