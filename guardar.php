<!DOCTYPE html>
<head>
</head>
<body>
    <?php include("conexion.php");

    $clavephp=$_POST['clavednmtxt'];
    $nombrephp=$_POST['nombrednmtxt'];
    $edadphp=$_POST['edaddnmtxt'];
    $fotophp=addslashes(file_get_contents($_FILES ['fotodnmtxt']['tmp_name']));

    $query=("INSERT INTO persona VALUES ('$clavephp','$nombrephp','$edadphp','$fotophp')");
    $resultado=$conexion->query($query);

    if($resultado){
        echo"listo";
    }else{
        echo"no se guardo";
    }
?>
</body>
</html>