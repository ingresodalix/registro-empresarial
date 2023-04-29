<!DOCTYPE html>
<head>
</head>
<body>
<?php
include("conexion.php");
$idphp=$_REQUEST['clavednmtxt'];
$clavephp=$_POST['clavednmtxt'];
$nombrephp=$_POST['nombrednmtxt'];
$edadphp=$_POST['edaddnmtxt'];

$fotophp=addslashes(file_get_contents($_FILES['fotodnmtxt']['tmp_name']));

$query="UPDATE persona SET clavephp='$clavephp', nombrephp='$nombrephp', edadphp='$edadphp', fotophp='$fotophp'
WHERE clavephp='$idphp'";

$resultado=$conexion->query($query);
if($resultado)
{
    header("location:tabla.php");
}
else{
echo ("error verifique e intente nuevamente");
}
?>
</body>
</html>