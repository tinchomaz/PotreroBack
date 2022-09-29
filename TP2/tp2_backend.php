<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Practico 3</h1>
    Positivo
    <br>
    <?php
    $n=5;
    if($n>0){
        echo "la variable n es positivo";
    }else if($n<0){
        echo "la variable es negativo";
    }else echo "la variable es 0";
    ?>
    <br>
    Entre 1 y 10
    <br>
    <?php
    $n=7;
    if($n>1 && $n<10){
        echo "el numero esta entre 1 y 10";
    }else  echo "el numero no esta entre 1 y 10"
    ?>
    <br>
    Mayor a 10 O menor a 2
    <br>
    <?php
    $n=20;
    if($n>10 || $n<2){
        echo "el numero cumple con la condicion";
    }else echo "el numero no cumple con la condicion";
    ?>
    <br>
    numero 1 y numero 2
    <br>
    <?php
    $numero1=10;
    $numero2=10;
    if($numero1>$numero2){
        echo " suma ";
        echo $numero1+$numero2;
        echo " resta ";
        echo $numero1-$numero2;
    }else if ($numero1<$numero2){
        echo " multiplicacion ";
        echo $numero1*$numero2;
        echo " division ";
        echo $numero1/$numero2;
        echo " resto ";
        echo $numero1%$numero2;
    }else if ($numero1==$numero2){
        echo "Los números ingresados son iguales";
    }
    ?>

</body>
</html>