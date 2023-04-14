<?php
$usuario = $_POST['usuario']; // recivo usuario del form que viene mediante el metodo POST
$clave   = $_POST['clave'];
$conn = mysqli_connect("localhost", "root", "", "proyecto_db_i");
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuarios WHERE usuario='".$usuario."'";
$result = $conn->query($sql);

if ($result->num_rows>0) {
  $row = $result->fetch_assoc();
  if ($clave===$row["clave"]){
    session_start();
    $_SESSION["usuario"] = $row["usuario"];
    header("Location: http://localhost/PROYECTO_DB_I/vistas/portal.php");
  }else{
    echo "LA CONTRASEÑA ES INCORRECTA";
  }
} else {
    echo "EL USUARIO NO EXISTE";
}
$conn->close();

?>