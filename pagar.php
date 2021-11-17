<?php
session_start();
include 'head.php';
if (isset($_REQUEST['pagar'])) {
  $matricula=$_REQUEST["matricula"];
  $fecha_hora=$_REQUEST["fecha_hora"];
  foreach($_SESSION["multas"] as $clave=>$vector) {
    if(($vector["matricula"]==$matricula) && ($vector["fecha_hora"]==$fecha_hora))
    $_SESSION["multas"]["pagada"]="SI";
  }
  echo("Multa pagada con exito.");
}

echo' 
Introduce los datos de la Multa a Pagar <mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" required />
     </td>
  </tr>
  
 <tr>
  <td colspan="2">
    <div align="center">
       <input name="pagar" type="submit"  value="Pagar Multa"/>
    </div>
  </td>
</tr>
</table>
</form>
</div>';              
include 'pie.php';
