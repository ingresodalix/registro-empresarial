<!DOCTYPE html>
<head>
    <title>modificar</title>
</head>
<body bgcolor="pink">
<center>
<i><font color="purple"><h1>modificar</h1></font></i>
<?php
$idphp=$_REQUEST['cve_usuario'];
include("conexion.php");
$query="SELECT * FROM persona WHERE clavephp='$idphp'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
<form action="modificar.php?idphp=<?php $row['clavephp']; ?>"method="POST" enctype="multipart/form-data"><br>

clave:<input type="text" REQUIRED name="clavednmtxt" pleaceholder="automatica" value="<?php echo $row['clavephp']; ?>"/><br><br>

nombre:<input type="text" REQUIRED name="nombrednmtxt" pleaceholder="solo nombre" value="<?php echo $row['nombrephp']; ?>"/><br><br>
 
edad:<input type="text" REQUIRED name="edaddnmtxt" pleaceholder="años de edad" value="<?php echo $row['edadphp']; ?>"/><br><br>

<img height="200px" width="200px" src="data:image/jpg;base64,
<?php echo base64_encode($row['fotophp']);?>"/><br><br>

<input type="file" name="fotodnmtxt" value=""/>

<input type="submit" value="aceptar"/>

</form>
</center>
</body>
</html>