<!DOCTYPE html>

<html>
<body>
    <h1> Exemplo de PhP no HTML </h1>
    <?php 
    date_default_timezone_set("Asia/Bangkok");
    $data_hoje = date("d/m/Y h:i:s", time());
    ?>
    <p align="center"> Agora em Bangkok: <?php echo $data_hoje; ?> </p>
<?php
    $x=5;
    $y=7;

    echo "O valor de x + y é: " . ($x+$y).'<br><br>';
    echo "O valor de x - y é: " . ($x-$y).'<br><br>';
    echo "O valor de x * y é: " . ($x*$y).'<br><br>';
    echo "O valor concatenado de x . y é: " . ($x.$y).'<br><br>';
    echo "O valor de x / y é: " . ($x/$y).'<br><br>';
    echo "O resto da divisão de y e x é: " . ($y%$x).'<br><br>';
    echo "O incremento do x é: " . (++$x);

    ?>
</body>
</hmtl>