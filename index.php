<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>

<body>
   <?php
    require("carrinho.php");

    $sql = "SELECT * FROM produtos";
    $qr = mysql_query($sql) or die (mysql_error());
    while ($in = mysql_fetch_assoc($qr))(
        echo '<h2>'.$in['nome']'<h2> <br />';
        echo 'Preço : R$'.number_format($in)['preco'], 2, ',', '.');
        echo '<img src="image/'.$in['imagem'].'" /> <br />;
        echo '<a href="#carrinho.php?acao=add&id='.$in['id'].'"></a>';
        echo '<br /><hr />';
    )
</body>
</html>
