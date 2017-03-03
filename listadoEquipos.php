<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos por conferencia</title>
  </head>
  <body>

    <?php
      include "dbNBA.php";
      //Crear el objeto de conexion
      $nba=new dbNBA();
      //Comprobar que llega la variable conferencia
      if(isset($_POST["equipo_local"])){
        //Recuoperar los equipos y sus conferencias
        $resultado=$nba->devolverEquiposTemp($_POST["equipo_local"], $_POST["equipo_visitante"],$_POST["temporada"] );
         ?>
        <table>
          <tr>
            <th>Equipo Local</th>
            <th>Equipo Visitante</th>
            <th>Temporada</th>
          </tr>
        <?php
            while ($fila = $resultado->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$_POST["equipo_local"]."</td>";
              echo "<td>".$_POST["equipo_visitante"]."</td>";
                echo "<td>".$_POST["temporada"]."</td>";
              echo "</tr>";
            }
        ?>
        </table>
      <?php }?>

  </body>
</html>
