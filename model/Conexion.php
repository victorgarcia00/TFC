<?php
class Conexion
{
    public static function __connect()
    {
        $dsn = "mysql:host=localhost;dbname=app";
        $username = "root";
        $password = "";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        try {
            $pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        return $pdo;
    }
    
}
