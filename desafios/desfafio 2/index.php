<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sorteador de numeros</title>
</head>
<body>
    <header>
        <h1>gerador de numeros aleatorios</h1>
    </header>
    <main>
        <?php
            $num = random_int(0, 100);
            print "<h2> o numero gerado entre 0 a 100 foi $num</h2>";
        ?>
        <a href="index.php"><button>🔁gerar outro</button></a>
    </main>
</body>
</html>