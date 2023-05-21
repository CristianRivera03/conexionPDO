<?php

    include_once 'conexion.php';
    $conectar = new ConexionPDO($host,$db,$user,$pws);
    $conectar -> conectar();

?>