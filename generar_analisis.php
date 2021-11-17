<?php
include 'head.php';
session_start();
$contador1=0;
$contador2=0;
$contador3=0;
$contador4=0;
foreach($_SESSION["multas"] as $clave => $vector) {
  switch($vector["radar"]) {
    case 1: $contador1++;
    break;
    case 2: $contador2++;
    break;
    case 3: $contador3++;
    break;
    case 4: $contador4++;
    break;
  }
}
echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>'.$contador1.'</td>
      <td>'.$contador2.'</td>
      <td>'.$contador3.'</td>
      <td>'.$contador4.'</td>
    </tr>
  </tbody>

</table>

';
include 'pie.php';

