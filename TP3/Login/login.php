<?php
$usuario=$_POST ["user"];
$contra=$_POST ["pass"];

$ckuser= "admin";
$ckpass= "pass";

if($usuario==$ckuser && $ckpass==$contra){
  header ("location:https://www.potrerodigital.org/");
}else{
    header ("location:error.html");
} 
?>