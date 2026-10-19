<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>resultado final</h1>
        <?php 
            $num = $_REQUEST ["num"] ?? 0;
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "<p>o antecessor de $num é $antecessor.</p>";
            echo "<p>o numero escolhido foi $num</p>";
            echo "<p>o sucessor de $num é $sucessor</p>";
        ?>
        <button><a href="index.html">voltar para a pagina inicial</a></button>
    </main>
</body>
</html>