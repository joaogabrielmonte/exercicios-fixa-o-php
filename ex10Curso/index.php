<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $Atual = date("Y");
        $nasc = $_GET['anoNasc'] ?? '2000';
        $ano = $_GET['anoAtual'] ?? $Atual;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="Nascimento">Nascimento</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" <?=$nasc?>>
            <label for="Nascimento">quer saber sua idade em que ano ?(atualmente estamos em 2023)</label>
            <input type="number" name="anoAtual" id="anoAtual" min="1900" <?=$ano?>>
            <input type="submit" value="qual será minha idade ?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
        ?>
        <p>quem nasceu no ano de <?=$nasc?> vai ter <?=$idade?> anos em <?=$ano?></p>
    </section>
</body>
</html>