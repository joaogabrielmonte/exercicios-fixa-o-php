<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Caneta</title>
</head>
<body>
    <?php 
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1-> modelo = "BIC cristal";
            $c1->cor = "azul";
            $c1->ponta = 0.5;
            var_dump($c1)
    ?>
</body>
</html>