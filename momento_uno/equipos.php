<?php

$nomEquipos = array (
    array($_POST["txtequipo1"],3,3000000),
    array($_POST["txtequipo2"],5,2100000),
    array($_POST["txtequipo3"],2,1650000),
    array($_POST["txtequipo4"],4,350000)
  );

//Multiplicación, para calcular la invercion entre el precio y la cantidad de jugadores
$a = $nomEquipos[0][1] * $nomEquipos[0][2];
$b = $nomEquipos[1][1] * $nomEquipos[1][2];
$c = $nomEquipos[2][1] * $nomEquipos[2][2];
$d = $nomEquipos[3][1] * $nomEquipos[3][2];

 //Array Inversion, Array final
$inversion = array($a, $b, $c, $d );

$arrayFinalarray = array (
  array($_POST["txtequipo1"],3,3000000,$a),
  array($_POST["txtequipo2"],5,2100000,$b),
  array($_POST["txtequipo3"],2,1650000,$c),
  array($_POST["txtequipo4"],4,350000,$d)
);
//con el array_column, se toman los valores de la columna 1 de la matriz $nomEquipos y se almacenan en un nuevo array $total_jugadores 
//Con el array_sum, se suman los valores de un array 
$total_jugadores = array_column($arrayFinalarray, 1);
$total_precio = array_column($arrayFinalarray, 2);
$total_inversion = array_column($arrayFinalarray, 3);
?>
<table aling ="center">

  <tr>
    <th>Equipo</th>
    <th>Jugadores</th>
    <th>Precio</th>
    <th>Inversión</th>
  </tr>
  <tr>
    <td><?php echo $arrayFinalarray[0][0] ?></td>
    <td><?php echo $arrayFinalarray[0][1] ?></td>
    <td><?php echo $arrayFinalarray[0][2] ?></td>
    <td><?php echo $arrayFinalarray[0][3] ?></td>
  </tr>
  <tr>
    <td><?php echo $arrayFinalarray[1][0] ?></td>
    <td><?php echo $arrayFinalarray[1][1] ?></td>
    <td><?php echo $arrayFinalarray[1][2] ?></td>
    <td><?php echo $arrayFinalarray[1][3] ?></td>
  </tr>
  <tr>
    <td><?php echo $arrayFinalarray[2][0] ?></td>
    <td><?php echo $arrayFinalarray[2][1] ?></td>
    <td><?php echo $arrayFinalarray[2][2] ?></td>
    <td><?php echo $arrayFinalarray[2][3] ?></td>
  </tr>
  <tr>
    <td><?php echo $arrayFinalarray[3][0] ?></td>
    <td><?php echo $arrayFinalarray[3][1] ?></td>
    <td><?php echo $arrayFinalarray[3][2] ?></td>
    <td><?php echo $arrayFinalarray[3][3] ?></td>
  </tr>
  <tr>
    <td>Total</td>
    <td><?php echo array_sum($total_jugadores)  ?></td>
    <td><?php echo array_sum($total_precio) ?></td>
    <td><?php echo array_sum($total_inversion) ?></td>
  </tr>
</table>