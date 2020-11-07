<?php
$server= 'localhost';
$username='root';
$password='';
$database='login';
try{
    $con= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (PDOException $e){
    die('Error en la conexion:' . $e->getMessage());
}
return $con;
?>