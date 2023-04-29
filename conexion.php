<!DOCTYPE html>
<head>
</head>
<body>
    <?php
    $conexion=new mysqli("localhost", "root", "", "6avp");
    if($conexion){
        echo"Conexion Exitosa";
    }else{
        echo"Conexion NO Exitosa";
    }
    ?>
</body>
</html>