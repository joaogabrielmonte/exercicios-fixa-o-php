<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana","SEGUNDA", time() +3600);
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1> superglobais POST</h1>";
                var_dump($_POST);

                echo "<h1> superglobais GET</h1>";
                var_dump($_GET);

                echo "<h1> superglobais REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1></h1>";
                var_dump($_ENV);

                echo "<h1>superglobal server</h1>";
                var_dump($_SERVER);
            
                echo "<h1>superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>

</html>