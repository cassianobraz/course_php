<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <?php
    $cotação = 4.97;

    $real = $_GET["din"] ?? 0;

    $dólar = $real / $cotação;

    $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . "
        equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>

</html>