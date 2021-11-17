<?php
session_start();
$contador=0;
include 'head.php';
echo'Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">';
                                foreach($_SESSION["radares"] as $clave=>$valor) {
                                  $contador++;
                                  echo'<option value="'.$contador.'">'.$clave.'</option>';
                                } echo'
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';
if(isset($_REQUEST["insertar"])) {
  $precio_multa=0;
  $limite=0;
  $velocidad=$_REQUEST["velocidad"];
  $radar=$_REQUEST["identificador"];
  switch($radar) {
    case 1: $limite=30;
      if($velocidad>$limite) {
      $precio_multa=50+(($velocidad-$limite)*10);
    }
      break;
    case 2: $limite=50;
      if($velocidad>$limite) {
      $precio_multa=50+(($velocidad-$limite)*10);
    }
      break;
    case 3: $limite=90;
      if($velocidad>$limite) {
      $precio_multa=50+(($velocidad-$limite)*10);
    }
      break;
    case 4: $limite=100;
      if($velocidad>$limite) {
      $precio_multa=50+(($velocidad-$limite)*10);
    }
      break;
  }
  $_SESSION["multas"]["matricula"]= ($_REQUEST["matricula"]);
  $_SESSION["multas"]["radar"]= $radar;
  $_SESSION["multas"]["velocidad"]= $velocidad;
  $_SESSION["multas"]["fecha_hora"]= ($_REQUEST["fecha_hora"]);
  $_SESSION["multas"]["pagada"]="NO";
  $_SESSION["multas"]["cuantia"]= $precio_multa;
  $_SESSION["multas"]["limite"]= $limite;
  echo("Multa agregada con exito.");
}
include 'pie.php';