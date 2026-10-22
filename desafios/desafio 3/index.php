<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>conversao de moedas 1.0</title>
</head>
<body>
    <header>
        <h1>conversor de moedas V1</h1>
    </header>
    <main>
        <form action="index.php" method="get">
            <label for="">quantos R$ voce tem na carteira?</label>
            <input type="number" name="num" id="idnum" step="0.01">
            <input type="submit" value="converter para dolar">
            <?php
            $num = $_REQUEST["num"] ?? 0;
            $dolar = 5.02;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            print "<p>o valor " . numfmt_format_currency($padrao , $num , "BRL") . " convertendo para dólares equivale a <strong>US $". numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>";
            
            ?>
        </form>
    </main>
</body>
</html>