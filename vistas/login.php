<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de ingreso al courier</title>
    <link rel="stylesheet" href="http://localhost/PROYECTO_DB_I/css/estilo.css">
</head>
<body>
   <div class="formulario">
      <form action="http://localhost/PROYECTO_DB_I/controladores/validar.php" method="post">
         <label for="">Usuario</label>
         <input type="text" name="usuario" id="usuario">
         <label for="">Contraseña</label>
         <input type="password" name="clave" id="clave">
         <button type="submit" value="Ingresar">Ingresar</button>
      </form>
   </div> 
</body>
</html>