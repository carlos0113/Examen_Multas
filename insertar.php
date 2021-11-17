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
  $_SESSION["multas"]["matricula"]= ($_REQUEST["matricula"]);
  $_SESSION["multas"]["radar"]= ($_REQUEST["identificador"]);
  $_SESSION["multas"]["velocidad"]= ($_REQUEST["velocidad"]);
  $_SESSION["multas"]["fecha_hora"]= ($_REQUEST["fecha_hora"]);
  $_SESSION["multas"]["pagada"]="SI";
  echo("Multa agregada con exito.");
}
include 'pie.php';