<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>

        img.nota {
            height: 30px;
            margin: 5px;

        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['nota'] ?? 00;

        $resto = $saque;
        //saque de 100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        //saque de 50
        $tot50 = floor($resto / 50);
        $resto %= 150;

        //saque de 20
        $tot20 = floor($resto / 20);
        $resto %= 20;

        //saque de 10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        //saque de 5
        $tot5 = floor($resto / 5);
        $resto %= 5;

        //saque de 2
        $tot2 = floor($resto / 2);
        $resto %= 2;
        
        //saque de 1
        $tot1 = floor($resto / 1);
        $resto %= 1;
        
        
    ?>
    <main>
        <h2>Caixa Eletronico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor saque"> qual valor você deseja sacar(R$)</label>
            <input type="number" name="nota" id="nota" step="5" value="<?=$saque?>" required>
            <p style="font-size: 0.6em;" ><strong>notas disponiveis: R$100, R$50, R$10 e R$5</strong></p>
            <input type="submit" value="saque">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=number_format($saque,2,',','.')?> realizado</h2>
        <p>o caixa eletronico</p>
        <ul>
            <li> <img src="img/100-reais.jpg"  alt="" class="nota"> x<?=$tot100?></li>
            <li> <img src="img/50-reais (1).jpg" alt="" class="nota"> x<?=$tot50?></li>
            <li> <img src="img/20-reais.jpg" alt="" class="nota"> x<?=$tot20?></li>
            <li> <img src="img/10-reais.jpg" alt="" class="nota"> x<?=$tot10?></li>
            <li> <img src="img/5-reais.jpg" alt="" class="nota"> x<?=$tot5?></li>
            <li> <img src="img/2-reais.jpg" alt="" class="nota"> x<?=$tot2?></li>
            <li> <img src="img/1-real.jpg" alt="" class="nota"> x<?=$tot1?></li>
        </ul>
    </section>
    
</body>
</html>