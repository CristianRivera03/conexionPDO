<?php

class ConexionPDO
{
    //Creando variables
    private $host;
    private $db;
    private $user;
    private $pws;
    private $connection;

    //Inicializando (Crea ndo constructor)
    public function __construct($host, $db, $user, $pws)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pws = $pws;
    }

    public function conectar()
    {
        try {
            $option = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->connection =new PDO('mysql:host='.$this->host.';
                dbname=' . $this->db,
                $this->user,
                $this->pws,
                $option
            );

            if ($this->connection) {
                echo 'Conexion exitosa';
            } else {
                echo 'Error de conexion';
            }
        } catch (PDOException $e) {
            echo 'Error de conexion' . $e->getMessage();
            die();
        }
    }

    public function desconectar()
    {
        $this->connection = null;
        echo 'Base de datos desconectada';
    }
}

$host = 'localhost';
$db = "dbclasepoo";
$user = 'root';
$pws = '';
?>