<?php

//*
/* 
todo lo que se escriba 
*/

print('Hello ');
echo"World \n";
$boolean = true; // TRUE o True
$boolean = false; //FALSE or False
$int1=12;
$int2=-12;
$int3=012; //Octal
$int4=0x0F; //Hexadecimal;
//$int5=0b1111111; // 255

$float= 1.234;
$float=1.2e3; //1200 potensia
$float=7E-10;

unset($int1); // eliminar variable

var_dump($float);
var_dump($int4);

$sum = 1+1;
$res=2-1.0;
$mul = 4*3;
$div =2/4;
var_dump($res);
var_dump($div);


$num=0;
$num +=1; 
echo $num++;
echo ++$num;

$num /= $float;

//strings

$num = 5;
$varString ='$num \n';
echo $varString;
$varString="el valor de la variable num= $num \n";
echo $varString;
$otroString ="otra forma de incluir variables {$num} \n";
echo $otroString;
$otroString2= "otra 2 forma de incluir variables $${num} \n";
echo $otroString2;
$stringMult =<<<'END'
Multi Line
string
END;
echo $stringMult."\n";
echo 'Este es un'.'String'."\n";
echo 'multiples'."\n",'parametros'."\n",'en echo'."\n";

//constantes


define("FOO","algo" );
echo FOO;
echo "Este es el valor de la constante FOO =".FOO;


