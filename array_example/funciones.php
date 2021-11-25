<?php
//Crear función sin parámetros
function Saludar()
{
    echo "Hello World";
    echo "<br>";
}

//ejecutar función

Saludar ();


//Crear función con parámetros
function Saludo($nombre)
{
    echo "Hello World " .$nombre;
    echo "<br>";

}

Saludo('María');
Saludo('Juan');
echo "<hr>";


// función con return

function sum($a, $b)
{
    $resultado = ($a + $b);
    return $resultado;
}

//sum(15, 9);
//echo "Total: " . $resultado;
$c = sum(15, 9);
echo $c;