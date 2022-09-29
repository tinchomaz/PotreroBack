<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Practico 1</h1>
    <?php 
    echo "Hola Mundo";
    ?>
    <br>
    <?php
    $Saludo="Hola Mundo";
    echo $Saludo;
    ?>
    <br>
    <?php
    $Num1=100;
    $Num2=5;
    echo $Num1+$Num2;
    echo " ";
    echo $Num1-$Num2;
    echo " ";
    echo $Num1*$Num2;
    echo " ";
    echo $Num1/$Num2;
    echo " ";
    echo $Num1%$Num2;
    echo " ";
    ?>
    <br>
    <?php
    $Celsius=20;
    $Faren=($Celsius*(9/5))+32;
    echo $Faren;
    ?>
    <br>
    <?php
    $BaseRec=18;
    $AlturaRec=12;
    $Area=$BaseRec*$AlturaRec;
    $Peri=($BaseRec*2)+($AlturaRec*2);
    echo $Area;
    echo " ";
    echo $Peri;
    ?>
    <br>
    <?php
    $Radio=30;
    $Peri=2*3.14*$Radio;
    $Area=3.14*$Radio*$Radio;
    echo $Peri;
    echo " ";
    echo $Area;
    ?>
</body>
</html>