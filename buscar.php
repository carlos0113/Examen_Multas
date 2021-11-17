<?php
session_start();
include 'head.php';
echo' 
Introduce la Matricula de la Multa/s <mark> NO PAGADAS</mark> a Buscar<mark>(1 Puntos)<br><br>
                         
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
 
  
  <tr ><td colspan="2"><div align="center"><strong>
<input name="buscar" type="submit" id="buscar" value="Buscar"/>
</strong></div></td></tr>
</table>
</form>
</div>';
if(isset($_REQUEST["buscar"])) {
  $matricula=$_REQUEST["matricula"];
    foreach ($_SESSION["multas"] as $key => $val) {
        if (($val['matricula'] == $matricula) && ($val["pagada"] =="NO")) {
            var_dump($val);
        }
    }
    return null;
 var_dump($_SESSION["multas"][$clave]);
}
include 'pie.php';