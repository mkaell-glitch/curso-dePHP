<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exercicio PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("dia da semana","sabado", time() + 3600);
            session_start();
            $_SESSION["teste"] = "funcionou!";

            echo "<h1>superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>super global REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>super global COOKIE</h1>";
            var_dump($_COOKIE);

            echo "<h1>super global SESSION</h1>";
            var_dump($_SESSION);

            echo "<h1>super global ENV</h1>";
            var_dump($_ENV);
            //foreach (getenv() as $c => $v) {
            //    echo "<br> $c - $v";
            // };

            echo "<h1>super global SERVER</h1>";
            var_dump($_SERVER);

            echo "super global GLOBALS";
            var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>