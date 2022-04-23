<?php
/**
 * Manejo de la base de datos MySQL
 */
class MySQLdb
{
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "admin";
    private $db = "ecommerce";
    private $puerto = 3306;
    private $conn;

    function __construct(){
        $this->conn = mysqli_connect($this->host,
        $this->usuario,
        $this->clave,
        $this->db);

        if(mysqli_connect_errno()){
            printf("Error en la conexion a la base de datos %s", mysqli_connect_errno());
            exit();
        }else{
            print "conexion exitosa" . "<br>";
        }

        if (!mysqli_set_charset($this->conn,'utf8')) {
            printf("Error en la conversion de caracteres %s", mysqli_connect_error());
        }else{
            print "El conjunto de caracteres es: " . mysqli_character_set_name($this->conn) . "<br>";
        }
    }
}

?>