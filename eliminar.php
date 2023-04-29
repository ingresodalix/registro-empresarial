<!DOCTYPE html>
<head>
</head>
<body>
<?php
include("conexion.php");
$idphp=$_REQUEST['cve_usuario'];
$query="DELETE FROM persona WHERE clavephp='$idphp'";
$resultado=$conexion->query($query);
if($resultado)
{
    header("location:tabla.php");
}
else{
    echo"error, verifique los adatps e intente nuevamente";
}
?>
</body>
</html>