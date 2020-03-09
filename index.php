<?php

include('funciones.php');

echo "evaluacionWEB1";

echo "<br> <br> Ejercicio 1 <br><br>" ;
$numero1 =20;
$numero2 =16;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo ("La suma es: ".$numero1."+".$numero2."=".$suma);
print("<br>");
echo ("La resta es: ".$numero1."-".$numero2."=".$resta);
print("<br>");
echo ("La multiplicacion es: ".$numero1."*".$numero2."=".$multiplicacion);
print("<br>");
echo ("La division es: ".$numero1."/".$numero2."=".$division);


/*punto 2 del taller indice de masa corporal*/
echo "<br><br>Ejercicio 2 <br>";

$peso=85;
$estatura=1.78;
$imc=$peso/($estatura*$estatura);
echo "<br>Señor usuario su estatura es de: ".$estatura."m y su peso es de: ".$peso."Kg";
echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}else
{
    echo " <br> Obesidad 3 ";
}


/*punto tres, descuento por cantidadde pares comprados*/
echo "<br><br>Ejercicio 3 <br><br>";

$cantidadZapatosVendidos=5;
$valorporPar=150000;
$totalVenta=$cantidadZapatosVendidos*$valorporPar;
$descuento1=0.2;
$valorDescuento=$totalVenta*$descuento1;
$valorTotalPagar=$totalVenta-$valorDescuento;

echo "Cantidad vendida: ".$cantidadZapatosVendidos;
echo "<br>Costo Neto: ".$totalVenta;


if($cantidadZapatosVendidos<=3){
    $totalVenta*0.10==$descuento1;
    echo "<br>Descuento: 10%";
}elseif($cantidadZapatosVendidos>3 && $cantidadZapatosVendidos<=5){
    $totalVenta*0.20==$descuento1;
    echo "<br>Descuento: 20%";
    echo "<br>Valor del descuento: ".$valorDescuento;
    echo "<br>Valor total a pagar: ".$valorTotalPagar;

}elseif($cantidadZapatosVendidos>5){
    $descuento1=0.40*$totalVenta;
    echo "<br>Descuento: 40%";
}


//punto 4 del taller
echo "<br><br>Ejercicio 4 <br><br>";
$numerodehoras=36;
$valorhora1=20000;
$valorhora2=25000;
$sueldoSemanal=0;

if($numerodehoras<=40)
{
    $sueldoSemanal=$numerodehoras*$valorhora1;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora1;
    echo "<br>El salario devengado en la semana es de: $".$sueldoSemanal;
}
elseif($numerodehoras>40)
{
    $sueldoSemanal=$numerodehoras*$valorhora2;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora2;
}


//punto 5 del taller
/*.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar información
 de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A. Además, su programa debe estar
 en la capacidad de sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada 
 $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensual es de
 20.000.000 y la sucursal C cuyo valor de salarios mensuales es de 15.000.000. Permita que
su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información
completa de los 5 usuarios de la sucursal A*/

echo "<br><br>Ejercicio 5 <br>";
echo"Los ususarios registrados en la sucursal A son: <br>";

$usuario1="Juan Perez -"; 
$telefono1="3224567898 -"; 
$direccion1= "Cll 100sur-#34a-25 -"; 
$salario1=3520000;

$usuario2="Ana Gaviria -"; 
$telefono2="3024569852 -"; 
$direccion2="Cll 90#10-80 -"; 
$salario2=4580000;

$usuario3="Pedro Mesa"; 
$telefono3="3108965474 -"; 
$direccion3="Cll 85 #25-10 -"; 
$salario3=1250000;

$usuario4="Catalina Castaño -"; 
$telefono4="3148555555 -"; 
$direccion4="Cll 100sur # 35a-27 -"; 
$salario4=3800000;

$usuario5="Gabriel Rodriguez -"; 
$telefono5="3001234879 -"; 
$direccion5="Cr 37 # 100-20 -"; 
$salario5=6490000;


echo "<br>";
echo $usuario1.$telefono1.$direccion1." $".$salario1."<br>";
echo $usuario2.$telefono2.$direccion2." $".$salario2."<br>";
echo $usuario3.$telefono3.$direccion3." $".$salario3."<br>";
echo $usuario4.$telefono4.$direccion4." $".$salario4."<br>";
echo $usuario5.$telefono5.$direccion5." $".$salario5."<br>";

$sumatoriaSalarios=($salario1+$salario2+$salario3+$salario4+$salario5);
$salarioSucarsalB=20000000;
$salarioSucursalC=15000000;
echo "<br>";
if($sumatoriaSalarios>$salarioSucarsalB&&$sumatoriaSalarios>$salarioSucursalC){

    echo"El mayor ingrso lo tiene la sucrusal A";
}
elseif($salarioSucarsalB>$sumatoriaSalarios&&$salarioSucarsalB>$salarioSucursalC){
    echo"El mayor ingrso lo tiene la sucrusal B";
}
else
    echo"El mayor ingrso lo tiene la sucrusal C";

/*6. Almacena en un Array los 10 primeros números pares. Imprima en pantalla cada uno de estos, en una línea diferente con el siguiente
formato:
    El 1° numero par es: 2
    El 2° numero par es: 4*/
//Arreglos
    echo "<br><br>Ejercicio 6 <br>";

    $arreglo=array('1°'=>"2",'2°'=>"4",'3°'=>"6",'4°'=>"8",'5°'=>"10",'6°'=>"12",'7°'=>"14",'8°'=>"16",'9°'=>"18",'10°'=>"20");
    foreach($arreglo as $clave=>$valor){
    echo"<br>"."El ".$clave."numero par es: ";
    echo ($valor);
}

/*7. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de 
dicha consulta en un arreglo denominado salpicon, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[dulce3]=>”Lulo”*/
echo "<br><br>Ejercicio 7 <br>";
echo"El salpicon esta compuesto por: ";

$salpicon=array('dulce1'=>"Banano",'dulce2'=>"Manzana",'dulce3'=>"Durazno",'acido1'=>"Piña",'acido2'=>"Naranja",'acido3'=>"Lulo");
echo("<br>");
print_r($salpicon);


/*8. La federación nacional de fútbol necesita de sus servicios como desarrollador de software, para codificar una 
función en PHP que permita calcular la edad de los jugadores, de acuerdo al año de nacimiento de estos. 
Declare la función calcularEdad() y pruebe su funcionamiento con los años de nacimiento 1991,1995,1987.*/

echo "<br><br>Ejercicio 8 <br>";
echo("<br>");
$edad=calcularEdad(1991,2020);
echo ("Si nacio en 1991 usted tiene: ".$edad." años <br>");
$edad=calcularEdad(1995,2020);
echo ("Si nacio en 1995 usted tiene: ".$edad." años <br>");
$edad=calcularEdad(1987,2020);
echo ("Si nacio en 1987 usted tiene: ".$edad." años <br>");

echo "<br>Ejercicio 9 <br>";

/*9. La federación nacional de fútbol también necesita que usted codifique una nueva 
función para establecer el biotipo de los jugadores teniendo en cuenta la estatura de estos. 
La clasificación internacional del Biotipo de futbolista es:
Estatura <1.70 m (Biotipo Bajo)
1.70 m <=Estatura < 1.80 m (Biotipo Promedio)
Estatura >= 1,80 m (Biotipo Superior)
Ejecute 3 veces su función para las estaturas 1.65 m, 1.78 m y 1.95 m*/


$biotipo=calcularBiotipo(1.65);
$biotipo=calcularBiotipo(1.78);
$biotipo=calcularBiotipo(1.95);






?>