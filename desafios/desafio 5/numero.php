<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numero real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>analisador de numero real</h1>
        <?php 
        $num = $_POST["n"] ?? 0;
        echo "<p>analisando o <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuario.</p>";

        $Int = (int)$num;
        $fra = $num - $Int;

        echo "<ul><li> a parte inteira do numero é <strong>" . number_format($Int, 0, ",", ".") . "</strong></li>";
        echo "<li>a parte fracionária é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button><a href="index.html">voltar</a></button>
    </main>
</body>
</html>