<!DOCTYPE html>
<head>
</head>
<body bgcolor="pink">
<center>
<i><font color="red"><h1>Datos a Consultar</h1></font></i>
<table width="50%" height="60%" border="2" bgcolor="#b2dafa"> 
<tr bgcolor="#84b6f4">
<th colspan="1"><a href="formulario_guardar.php">Nuevo registro</a></th>
<th colspan="5">Usuarios Registrados</th>
</tr>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>Edad</td>
    <td>Foto</td>
    <td>Modificar</td>
    <td>Eliminar</td>
</tr>
<?php
include("conexion.php");
$query="SELECT * FROM persona";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{

?>

<tr>
    <td><?php echo $row['clavephp'];?></td>
    <td><?php echo $row['nombrephp'];?></td>
    <td><?php echo $row['edadphp'];?></td>   

<td><img height="200px" width="200px" src="data:image/jpg;base64,
<?php echo base64_encode($row['fotophp']);?>"/></td>


<td><a href="formulario_modificar.php?cve_usuario=<?php echo $row['clavephp'];?>">modificar</a></td>
<td><a href="eliminar.php?cve_usuario=<?php echo $row['clavephp'];?>">eliminar</a></td>


</tr>
<?php
}
?>
</table>
</center>
</body>
</html>