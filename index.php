<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina principal</title>
  </head>
  <body>
    <h2>MOSTRAR LISTADO DE TODOS LOS EQUIPOS</h2>
    <form action="listadoEquipos.php" method="POST">

      Equipo Local:<br>
      <input type="text" name="equipo_local"><br>

      Equipo Visitante:<br>
      <input type="text" name="equipo_visitante"><br>

      Temporada:<br>
      <input type="text" name="temporada"><br>

      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
